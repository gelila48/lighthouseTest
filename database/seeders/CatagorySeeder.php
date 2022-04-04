<?php

namespace Database\Seeders;

use App\Models\Catagory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Catagory::create([
            'title' => 'Educational'
        ]);
        Catagory::create([
            'title' => 'Fiction'
        ]);
        Catagory::create([
            'title' => 'Acadamic'
        ]);
    }
}
