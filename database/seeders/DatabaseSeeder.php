<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Currency;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Terrakion',
            'email' => 'terrakion@terrakion.com',
            'password' => Hash::make('KingTerrakion44'),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@terrakion.com',
            'password' => Hash::make('KingAdmin33'),
        ]);

        User::factory()->create([
            'name' => 'Receptor',
            'email' => 'receptor@terrakion.com',
            'password' => Hash::make('KingReceptor22'),
        ]);

        User::factory()->create([
            'name' => 'Guest',
            'email' => 'guest@terrakion.com',
            'password' => Hash::make('KinGuest11'),
        ]);

        User::factory(100)->create();

        Level::factory()->create(['name' => 'rookie']);
        Level::factory()->create(['name' => 'regular']);
        Level::factory()->create(['name' => 'vip']);

        Currency::factory()->create([
            'name' => 'American dollar',
            'code' => 'USA',
            'price' => 1,
        ]);

        Currency::factory()->create([
            'name' => 'Colombian peso',
            'code' => 'COL',
            'price' => 4100,
        ]);

        // Currency::factory()->create([
        //     'name' => 'Venezuelan Bolivar',
        //     'code' => 'VEN',
        //     'price' => '?',
        // ]);

        Category::factory()->create(['name' => 'groups']);
        Category::factory()->create(['name' => 'agencies']);
        Category::factory()->create(['name' => 'accounts']);

        $this->call(AccountSeeder::class);
        $this->call(AuthorizationSeeder::class);
    }
}
