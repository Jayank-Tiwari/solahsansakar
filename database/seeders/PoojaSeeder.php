<?php

namespace Database\Seeders;

use App\Models\Pooja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PoojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poojas = [
            [
                'title' => 'Griha Pravesh Pooja',
                'description' => 'Bless your new home with sacred rituals for prosperity, peace, and protection against negative energies.',
                'price_pandit_samagri' => 1100000, // Storing in cents/paise
                'price_pandit_only' => 750000,
                'price_samagri_only' => 450000,
            ],
            [
                'title' => 'Satyanarayan Pooja',
                'description' => 'Invoke the blessings of Lord Vishnu for success, health, and fulfillment of your desires.',
                'price_pandit_samagri' => 800000,
                'price_pandit_only' => 510000,
                'price_samagri_only' => 350000,
            ],
            [
                'title' => 'Maha Mrityunjaya Jaap',
                'description' => 'A powerful chant dedicated to Lord Shiva for healing, rejuvenation, and freedom from negativities.',
                'price_pandit_samagri' => 1500000,
                'price_pandit_only' => 1100000,
                'price_samagri_only' => 550000,
            ],
        ];

        foreach ($poojas as $pooja) {
            Pooja::create([
                'title' => $pooja['title'],
                'slug' => Str::slug($pooja['title']),
                'description' => $pooja['description'],
                'price_pandit_samagri' => $pooja['price_pandit_samagri'],
                'price_pandit_only' => $pooja['price_pandit_only'],
                'price_samagri_only' => $pooja['price_samagri_only'],
            ]);
        }
    }
}