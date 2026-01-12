<?php

namespace Database\Seeders;

use App\Models\Produit;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::insert([
            // 🔌 Électroménager
            [
                'nom' => 'Machine à laver',
                'prix' => 3000,
                'categorie' => 'electromenager',
                'image' => 'machine_laver.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Four',
                'prix' => 1500,
                'categorie' => 'electromenager',
                'image' => 'four.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Micro onde',
                'prix' => 1000,
                'categorie' => 'electromenager',
                'image' => 'micro_onde.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //  Hiking
            [
                'nom' => 'Sac à dos',
                'prix' => 250,
                'categorie' => 'hiking',
                'image' => 'sac_dos.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Tente',
                'prix' => 250,
                'categorie' => 'hiking',
                'image' => 'tente.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Montre GPS',
                'prix' => 2000,
                'categorie' => 'hiking',
                'image' => 'montre_gps.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Camping douche',
                'prix' => 400,
                'categorie' => 'hiking',
                'image' => 'camping_douche.jpg',
                'solde' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
