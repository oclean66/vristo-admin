<?php

use Spatie\Permission\Models\Permission;

if (!function_exists('autoCreatePermissions')) {
    function autoCreatePermissions(): void
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
                // @phpstan-ignore-next-line
                Permission::updateOrCreate(['name' => $method . '-' . $controllerName]);
            }

            // @phpstan-ignore-next-line
            Permission::updateOrCreate(['name' => 'see-' . $controllerName]);
        }
    }
}
