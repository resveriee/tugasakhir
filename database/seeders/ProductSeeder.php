<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        product::factory()->count(30)->create();
    }
}
