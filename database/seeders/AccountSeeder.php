<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::factory(10)->create([
            'category_id' => 3
        ]);

        Account::factory(100)->create([
            'parent_id' => Account::all()->random()->id,
            'category_id' => 4
        ]);

        Account::factory(8000)->create([
            'category_id' => 5
        ]);
    }
}
