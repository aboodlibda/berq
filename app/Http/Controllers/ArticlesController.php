<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate();
        return view('cms.articles.index',compact('articles'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('cms.articles.create',compact('tags','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:10',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',
            'tag_id'=>'required',

        ]);

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $request->image->move(public_path('articlesImages/'), $imageName);
        $article = new Article();
        $article->image=($imageName);
        $article->title = $request->get('title');
        $article->description = $request->get('description');
        $article->category_id = $request->get('category_id');
        $article->user_id = Auth::id();
        $article->status = $request->get('status') == 'on' ? 'published' : 'unPublished';
        $article->save();
        $article->tags()->attach($request->tag_id);
        session()->flash('article_added');
        return redirect()->route('articles.create');
    }

    public function show(Article $article)
    {
//        return view('cms.articles.show',compact('article'));
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('cms.articles.edit',compact('article','categories','tags'));
    }

    public function update(Request $request, Article $article)
    {

        $request->validate([
            'title'=>'required|min:10',
            'description'=>'required',
            'category_id'=>'required',
            'tag_id'=>'required',

        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('articlesImages/'), $imageName);
            $article->image=($imageName);
        }
        $article->title = $request->get('title');
        $article->description = $request->get('description');
        $article->category_id = $request->get('category_id');
        $article->status = $request->get('status') == 'on' ? 'published' : 'unPublished';
        $article->tags()->sync($request->tag_id);
        $article->save();
        session()->flash('article_edited');
        return redirect()->route('articles.index');
    }

    public function destroy(Request $request)
    {
        $article = Article::findOrFail($request->article_id);
        $article->delete();
        $article->tags()->detach();
        session()->flash('article_deleted');
        return redirect()->route('articles.index');
    }
}
