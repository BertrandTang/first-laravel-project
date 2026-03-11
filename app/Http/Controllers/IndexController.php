<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Article;

class IndexController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('welcome', [
            'name' => 'Bertrand',
            'articles' => $articles,
        ]);
    }
}

