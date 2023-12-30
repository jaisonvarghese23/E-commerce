<?php

namespace Database\Seeders;

use App\Models\Catagory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catagory::create([
            'name'=> "Mobiles",

        ]);
        Catagory::create([
            'name'=> "Laptops",

        ]);
        Catagory::create([
            'name'=> "perfumes",

        ]);

    }
}
