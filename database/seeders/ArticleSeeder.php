<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 
 
    for ($i = 0; $i < 26; $i++) { 
        Article::create([ 
            'titre' => $faker->sentence(), 
            'contenu' => $faker->text(600), 
            'image' => $faker->imageUrl() 
        ]); 
    } 
    }
}
