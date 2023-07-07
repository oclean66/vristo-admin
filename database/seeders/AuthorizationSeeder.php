<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating roles
        $superAdmin = Role::create([
            'name' => 'super-admin',
            'description' => 'Super admin with all of access',
        ]);
        $admin = Role::create([
            'name' => 'admin',
            'description' => 'Regular admin',
        ]);
        $receptor = Role::create([
            'name' => 'receptor',
            'description' => 'Only read user',
        ]);

        // Creating permissions
        autoCreatePermissions();

        Permission::create(['name' => 'assign-role']);

        // Assigning permissions to roles
        $admin->syncPermissions(Permission::all());

        $receptor->syncPermissions(Permission::where('name', 'regexp', 'see-[a-z]+')->get());

        // Giving roles to users
        $superUser = User::find(1);
        $superUser->assignRole($superAdmin);

        $adminUser = User::find(2);
        $adminUser->assignRole($admin);

        $receptorUser = User::find(3);
        $receptorUser->assignRole($receptor);
    }
}
