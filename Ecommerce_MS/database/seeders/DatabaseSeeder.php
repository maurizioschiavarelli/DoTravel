<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Citta metropolitane',
        'Destinazioni storiche',
        'Destinazioni gastronomiche',
        'Destinazioni a Budget',
        'Destinazioni di Lusso',
        'Destinazioni Avventura',
        'Spiagge e Isole',
        'Montagna',
        'Destinazioni Ecoturistiche'
    ];

    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach ($this->categories as $category){
            Category::create([
                'name'=>$category
            ]);
        }
    }
}
