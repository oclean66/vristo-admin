<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Role::create(['name' => 'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $receptor = Role::create(['name' => 'receptor']);

        // Creating permissions
        // users
        $seeUsers = Permission::create(['name' => 'see-users']);
        $createUsers = Permission::create(['name' => 'create-users']);
        $updateUsers = Permission::create(['name' => 'update-users']);
        $deleteUsers = Permission::create(['name' => 'delete-users']);

        // accounts
        $seeAccounts = Permission::create(['name' => 'see-accounts']);
        $createAccounts = Permission::create(['name' => 'create-accounts']);
        $updateAccounts = Permission::create(['name' => 'update-accounts']);
        $deleteAccounts = Permission::create(['name' => 'delete-accounts']);

        // clients
        $seeClients = Permission::create(['name' => 'see-clients']);
        $createClients = Permission::create(['name' => 'create-clients']);
        $updateClients = Permission::create(['name' => 'update-clients']);
        $deleteClients = Permission::create(['name' => 'delete-clients']);

        // categories
        $seeCategories = Permission::create(['name' => 'see-categories']);
        $createCategories = Permission::create(['name' => 'create-categories']);
        $updateCategories = Permission::create(['name' => 'update-categories']);
        $deleteCategories = Permission::create(['name' => 'delete-categories']);

        // Assigning permissions to roles
        $admin->syncPermissions([
            $seeUsers,
            $createUsers,
            $updateUsers,
            $deleteUsers,
            $seeAccounts,
            $createAccounts,
            $updateAccounts,
            $deleteAccounts,
            $seeClients,
            $createClients,
            $updateClients,
            $deleteClients,
            $seeCategories,
            $createCategories,
            $updateCategories,
            $deleteCategories,
        ]);

        $receptor->syncPermissions([
            $seeUsers,
            $seeAccounts,
            $seeClients,
            $seeCategories,
        ]);

        // Giving roles to users
        $adminUser = User::find(2);
        $adminUser->assignRole($admin);

        $receptorUser = User::find(3);
        $receptorUser->assignRole($receptor);
    }
}
