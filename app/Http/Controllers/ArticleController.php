<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show($id): View
    {
        return view('pages.article-details', ['id' => $id]);
    }
}
