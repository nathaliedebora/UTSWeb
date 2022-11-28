<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $books = $category->books()->get();

        return view('categoryDetail', [
            'categories' => $categories,
            'categoryName' => $category->name,
            'books' => $books
        ]);
    }
}
