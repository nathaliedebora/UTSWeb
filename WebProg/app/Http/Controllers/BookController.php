<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::all();

        return view('home', [
            'categories' => $categories,
            'books' => $books
        ]);
    }

    public function show($id)
    {
        $categories = Category::all();
        $book = Book::find($id);

        return view('bookDetail', [
            'categories' => $categories,
            'book' => $book
        ]);
    }

    public function showContactPage()
    {
        $categories = DB::table('categories')->get();

        return view('contact', ['categories' => $categories]);
    }
}
