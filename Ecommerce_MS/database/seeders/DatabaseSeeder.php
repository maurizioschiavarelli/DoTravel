<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Elettronica',
        'Musica',
        'Abbigliamento',
        'Libri',
        'Giardino',
        'Casa',
        'Animali domestici',
        'Automobili',
        'Accessori'
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
