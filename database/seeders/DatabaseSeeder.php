<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $this->call(CategoryTableSeeder::class);
//        $this->command->info('Таблица категорий загружена данными!');
//
//        $this->call(BrandTableSeeder::class);
//        $this->command->info('Таблица брендов загружена данными!');

//        $this->call(ProductTableSeeder::class);
//        $this->command->info('Таблица товаров загружена данными!');

        $this->call(Brand::class);
        $this->command->info('Таблица brand загружена данными!');
    }
}
