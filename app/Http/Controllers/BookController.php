<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
//return type View
use Illuminate\View\View;

class BookController extends Controller
{
    //
    public function index(): View
    {
        $books = Book::latest()->paginate(10);
        return view("books.index", compact("books"));
    }
}
