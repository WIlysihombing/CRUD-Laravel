<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles ['articles'] = Article::orderBy('id', 'asc')->paginate(6);
        return view('articles.index', $articles);
    }

    public function show($slug)
    {
        $article ['articles'] = Article::where('slug', $slug)->first();
        
        if($article ['articles'] == null) 
        {
            abort(404);
        }

        return view('articles.single', $article);
    }

    public function create() 
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // dd($request->thumbnail);

        $request->validate([
            'thumbnail' => 'mimes:jpeg,png,bmp,gif,svg,or webp',
            'title' => 'required|max:100|min:2',
            'subject' => 'required|max:255|min:2',
        ]);
        
        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('app-assets/image'), $imgName);

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subject' =>$request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect('artikel');
    }

    public function edit($id)
    {
        $article ['articles'] = Article::find($id);

        return view('articles.edit', $article);
    }

    public function update(Request $request, $id)
    {
        Article::find($id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
        ]);

        return redirect('artikel');
    }

    public function destroy($id) 
    {
        Article::find($id)->delete();

        return redirect('/artikel');
    }
}