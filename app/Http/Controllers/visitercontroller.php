<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitercontroller extends Controller
{
   // php artisan show(Article $article)
   function visits()
{
    $article->visitsCounter()->increment();

    return view('article.show', ['article' => $article]);
}
}
