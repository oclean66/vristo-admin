<?php

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

if (!function_exists('autoCreatePermissions')) {
    /**
     * @param null|array<string> $permissions
     */
    function autoCreatePermissions($permissions = ['store', 'update', 'destroy']): void
    {
        $classList = require base_path('vendor/composer/autoload_classmap.php');
        $classes = array_keys($classList);
        $controllers = array_filter($classes, function ($class) {
            return str_contains($class, 'App\Http\Controllers')
            && !str_contains($class, 'App\Http\Controllers\LocalizationController')
            && !str_contains($class, 'App\Http\Controllers\Controller')
            && !str_contains($class, 'App\Http\Controllers\Auth');
        });

        foreach ($controllers as $controller) {
            $methods = get_class_methods($controller);

            $controllerName = strtolower(
                str_replace('Controller', '', str_replace('App\Http\Controllers\\', '', $controller))
            );

            foreach ($methods as $method) {
                if (array_search($method, $permissions)) {
                    Permission::updateOrCreate(['name' => $method . '-' . $controllerName]);
                }
            }

            Permission::updateOrCreate(['name' => 'see-' . $controllerName]);
            Permission::updateOrCreate(['name' => 'show-' . Str::plural($controllerName)]);
        }
    }
}
