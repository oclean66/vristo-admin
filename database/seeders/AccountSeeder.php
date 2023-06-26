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

        $company = Account::all()->where('title', 'Company')->first();
        $companyId = $company->getAttribute('id');

        for ($i = 0; $i < 10; $i++) {
            Account::factory()->create([
                'title' => fake()->company(),
                'parent_id' => $companyId,
            ]);
        }

        $accounts1 = Account::all()->where('title', '!=', 'Company');

        foreach ($accounts1 as $account1) {
            for ($i = 0; $i < rand(1, 5); $i++) {
                Account::factory()->create([
                    'title' => fake()->name(),
                    'parent_id' => $account1->getAttribute('id'),
                ]);
            }
        }

        $accounts2 = Account::all()->where('id', '>', 11);

        foreach ($accounts2 as $account2) {
            for ($i = 0; $i < rand(1, 20); $i++) {
                Account::factory()->create([
                    'title' => fake()->firstName() . fake()->lastName(),
                    'parent_id' => $account2->getAttribute('id'),
                ]);
            }
        }
    }
}
