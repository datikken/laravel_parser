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

    public function create(Request $request)
    {
        Validator::make($request->all(), [
            'link' => 'required|url',
            'class_list' => 'required',
            'class_block' => 'required'
        ])->validate();

        ParsingResource::create([
            'link' => $request->link,
            'class_list' => $request->class_list,
            'class_block' => $request->class_block,
            'classes_to_filter' => $request->classes_to_filter
        ]);

        return redirect('/');
    }

    public function read($id)
    {
        $rsc = ParsingResource::find($id);

        return view('pages.resource', ['rsc' => $rsc]);
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'link' => 'required|url',
            'class_list' => 'required',
            'class_block' => 'required',
            'classes_to_filter' => 'required'
        ])->validate();

        ParsingResource::where('id', $id)
            ->update([
                'link' => $request->link,
                'class_list' => $request->class_list,
                'class_block' => $request->class_block,
                'classes_to_filter' => $request->classes_to_filter
            ]);

        return redirect('/');
    }

    public function delete($id)
    {
        ParsingResource::destroy($id);

        return redirect('/');
    }
}
