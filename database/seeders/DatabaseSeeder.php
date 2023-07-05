<?php

namespace Database\Seeders;


use App\Models\Tariff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Tariff::create([
             'name' => 'Начальный',
             'price' => 0,
             'time' => 1,
             'count_search' => 1,
             'max_issuance' => 0
         ]);
        Tariff::create([
            'name' => 'Стандарт',
            'price' => 1000,
            'time' => 2,
            'count_search' => 15,
            'max_issuance' => 0
        ]);
        Tariff::create([
            'name' => 'Премиум',
            'price' => 5000,
            'time' => 6,
            'count_search' => 100,
            'max_issuance' => 0
        ]);
    }
}
