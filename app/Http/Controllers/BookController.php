<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // public function index()
    // {
    //      $books =[ 'Clean Code', 'Refactoring'];
    //     return view ('books.index',[
    //         'books' => $books
    //     ]);
    // }
    public function index()
    {
         $books =Book::orderBy('title')->get();
        return view ('books.index', compact ('books'));
    }
}

// public function index()
// {
//     $books = 'Clean Code', 'Refactoring'
//         return view ('Books.index',[
//             'books' => $books
//         ]);
// }