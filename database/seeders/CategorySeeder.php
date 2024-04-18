<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $names = ['máy tính', 'điện thoại', 'bàn phím', 'chuột', 'tai nghe'];
        
        foreach ($names as $name) {
            Category::create([
                'name' => $name,
                'description' => $faker->text(),
            ]);
        }
    }
}