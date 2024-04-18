<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');

        $names = ['Laptop ABC', 'Smartphone XYZ', 'Keyboard 123', 'Mouse 456', 'Headphones ZZZ'];
        $categories = ['máy tính', 'điện thoại', 'bàn phím', 'chuột', 'tai nghe'];

        for ($i = 0; $i < 20; $i++) {
            $name = $faker->randomElement($names);
            $category = $faker->randomElement($categories);
            
            $imageUrl = $faker->imageUrl($width = 640, $height = 480); // Tạo URL hình ảnh ngẫu nhiên
        
            Product::create([
                'name' => $name,
                'description' => $faker->sentence(),
                'url' => $imageUrl, // Sử dụng URL hình ảnh ngẫu nhiên
                'price' => $faker->randomFloat(2, 100000, 30000000),
                'quantity' => $faker->numberBetween(1, 100),
                'category_id' => Category::where('name', $category)->first()->id, // Lấy ID của danh mục tương ứng
            ]);
        }
    }
}