<?php

namespace Database\Seeders;

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
        Role::create(['name' => 'super_admin']);
        $admin = Role::create(['name' => 'admin']);
        $receptor = Role::create(['name' => 'receptor']);

        // Creating permissions
        // users
        $seeUsers = Permission::create(['name' => 'see_users']);
        $createUsers = Permission::create(['name' => 'create_users']);
        $updateUsers = Permission::create(['name' => 'update_users']);
        $deleteUsers = Permission::create(['name' => 'delete_users']);

        // accounts
        $seeAccounts = Permission::create(['name' => 'see_accounts']);
        $createAccounts = Permission::create(['name' => 'create_accounts']);
        $updateAccounts = Permission::create(['name' => 'update_accounts']);
        $deleteAccounts = Permission::create(['name' => 'delete_accounts']);

        // clients
        $seeClients = Permission::create(['name' => 'see_clients']);
        $createClients = Permission::create(['name' => 'create_clients']);
        $updateClients = Permission::create(['name' => 'update_clients']);
        $deleteClients = Permission::create(['name' => 'delete_clients']);

        // categories
        $seeCategories = Permission::create(['name' => 'see_categories']);
        $createCategories = Permission::create(['name' => 'create_categories']);
        $updateCategories = Permission::create(['name' => 'update_categories']);
        $deleteCategories = Permission::create(['name' => 'delete_categories']);

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
            $seeAccounts,
            $seeClients,
            $seeCategories,
        ]);
    }
}
