<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Book::create([
            'title' => 'Sapians',
            'author' => 'Dr.Abrham',
            'link' => 'https://www.ynharari.com/book/sapiens-2/',
            'description' => 'Homo sapiens rules the world because it is
                               the only animal that can believe in things that exist purely 
                               in its own imagination, such as gods, states, money, and human rights',
            'featured' => false,
            'image' => 'sapians.jpg',
            'catagory_id' => 1,
        ]);

        Book::create([
            'title' => 'ፍቅር እስከ መቃብር',
            'author' => 'Hadis Alemayew',
            'link' => 'https://www.ynharari.com/book/sapiens-2/',
            'description' => 'Homo sapiens rules the world because it is
                               the only animal that can believe in things that exist purely 
                               in its own imagination, such as gods, states, money, and human rights',
            'featured' => true,
            'image' => 'fikir.jpg',
            'catagory_id' => 2,
        ]);

        Book::create([
            'title' => 'Maths',
            'author' => 'Dr.Gelila',
            'link' => 'https://www.ynharari.com/book/sapiens-2/',
            'description' => 'Homo sapiens rules the world because it is
                               the only animal that can believe in things that exist purely 
                               in its own imagination, such as gods, states, money, and human rights',
            'featured' => false,
            'image' => 'sapians.jpg',
            'catagory_id' => 3,
        ]);
      
    }
}
