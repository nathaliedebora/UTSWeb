<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use DB;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view('publisher', [
            'categories' => $categories,
            'publishers' => $publishers
        ]);
    }
    
    public function show($id)
    {
        $categories = Category::all();
        $publisher = Publisher::find($id);
        $books = $publisher->books()->get();

        return view('publisherDetail', [
            'categories' => $categories,
            'publisher' => $publisher,
            'books' =>$books
        ]);
    }
}
