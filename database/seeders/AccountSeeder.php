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
        Account::factory()->create(['title' => 'Company']);

        $company = Account::where('title', 'Company')->first();
        $companyId = $company->id;

        for ($i = 0; $i < 10; $i++) {
            Account::factory()->create([
                'title' => fake()->company(),
                'parent_id' => $companyId,
                'category_id' => 1,
            ]);
        }

        $accounts1 = Account::where('title', '!=', 'Company')->get();

        foreach ($accounts1 as $account1) {
            for ($i = 0; $i < rand(1, 5); $i++) {
                Account::factory()->create([
                    'title' => fake()->name(),
                    'parent_id' => $account1->id,
                    'category_id' => 2,
                ]);
            }
        }

        $accounts2 = Account::where('id', '>', 11)->get();

        foreach ($accounts2 as $account2) {
            for ($i = 0; $i < rand(1, 20); $i++) {
                Account::factory()->create([
                    'title' => fake()->firstName() . fake()->lastName(),
                    'parent_id' => $account2->id,
                    'category_id' => 3,
                ]);
            }
        }
    }
}
