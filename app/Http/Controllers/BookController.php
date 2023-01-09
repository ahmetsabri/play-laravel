<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __invoke(Request $request)
    {
        $books = Type::with(['categories'=>function($query){
            $query->has('books')->with('category','books', 'subCategories');
        }])->get();

        return $books;
    }
}
