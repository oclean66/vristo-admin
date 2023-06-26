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
        User::factory(100)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

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
    }
}
