<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create(['name' => 'Company']);

        $company = Category::all()->where('name', 'Company');
        $companyId = $company[0]->id;
        
        Category::factory()->create([
            'name' => 'Clients',
            'parent_id' => $companyId
        ]);

        $clients = Category::all()->where('name', 'Clients');
        $clientsId = $clients[1]->id;

        Category::factory()->create([
            'name' => 'Managers',
            'parent_id' => $clientsId
        ]);

        $offices = Category::all()->where('name', 'Managers');
        $officesId = $offices[2]->id;

        Category::factory()->create([
            'name' => 'Offices',
            'parent_id' => $officesId
        ]);

        Category::factory()->create([
            'name' => 'Users',
            'parent_id' => $companyId
        ]);
    }
}
