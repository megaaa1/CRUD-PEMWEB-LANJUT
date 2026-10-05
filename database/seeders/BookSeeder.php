<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Book::create([
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'year' => 2008,
        ]);

        Book::create([
            'title' => 'Refactoring',
            'author' => 'Martin Fowler',
            'year' => 2018,
        ]);
    }
}
