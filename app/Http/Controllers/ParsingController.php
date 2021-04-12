<?php

namespace App\Http\Controllers;

use App\Models\ParsingResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;

class ParsingController extends Controller
{
    public function index()
    {
        $rsc = ParsingResource::all();
        $articles = Article::all();

        return view('welcome', ['resources' => $rsc, 'articles' => $articles]);
    }

    public function create_parsing_resource(Request $request)
    {
        Validator::make($request->all(), [
            'link' => 'required',
            'class_list' => 'required',
            'class_block' => 'required'
        ])->validate();

        ParsingResource::create([
            'link' => $request->link,
            'class_list'=>$request->class_list,
            'class_block'=>$request->class_block,
            'classes_to_filter' => $request->classes_to_filter
        ]);

        return redirect('/');
    }
}
