<?php

use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

if (! function_exists('autoCreatePermissions')) {
    /**
     * @param  null|array<string>  $permissions
     */
    function autoCreatePermissions($permissions = ['create', 'store', 'edit', 'update', 'destroy', 'delete']): void
    {
        $classList = require base_path('vendor/composer/autoload_classmap.php');
        $classes = array_keys($classList);
        $controllers = array_filter($classes, function ($class) {
            return str_contains($class, 'App\Http\Controllers')
            && ! str_contains($class, 'App\Http\Controllers\LocalizationController')
            && ! str_contains($class, 'App\Http\Controllers\Controller')
            && ! str_contains($class, 'App\Http\Controllers\Auth');
        });

        foreach ($controllers as $controller) {
            $methods = get_class_methods($controller);

            $controllerName = strtolower(
                str_replace('Controller', '', str_replace('App\Http\Controllers\\', '', $controller))
            );

            foreach ($methods as $method) {
                if (array_search($method, $permissions)) {
                    Permission::updateOrCreate(['name' => $method.'-'.$controllerName]);
                }
            }

            Permission::updateOrCreate(['name' => 'see-'.$controllerName]);
            Permission::updateOrCreate(['name' => 'show-'.Str::plural($controllerName)]);

        }

        // $liveComponents = array_filter($classes, function ($class) {
        //     return str_contains($class, 'App\Http\Livewire');
        // });

        // foreach ($liveComponents as $component) {
        //     $methods = get_class_methods($component);

        //     $componentName = strtolower(
        //         str_replace('\\', '-', str_replace('App\Http\Livewire\\', '', $component))
        //     );

        //     foreach ($methods as $method) {
        //         if (array_search($method, $permissions)) {
        //             Permission::updateOrCreate(['name' => $method.'-'.$componentName]);
        //         }
        //     }

        //     Permission::updateOrCreate(['name' => 'show-'.$componentName]);
        // }
    }
}
