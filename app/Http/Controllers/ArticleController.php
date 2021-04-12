<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function get_article($id)
    {
        $article = Article::find($id);

        return view('pages.article', ['article'=>$article]);
    }
}
