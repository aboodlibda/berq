<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('main');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function main()
    {
        $lastFour = Article::latest()->take(4)->get();
        $section = Section::first();
        $advertisement = Advertisement::first();

        $category_1 = Category::where('id',$section->section_1)->first();
        $category_2 = Category::where('id',$section->section_2)->first();
        $category_3 = Category::where('id',$section->section_3)->first();
        $article_1 = Article::where('category_id',$category_1->id)->latest()->get();
        $article_2 = Article::where('category_id',$category_2->id)->latest()->get();
        $article_3 = Article::where('category_id',$category_3->id)->latest()->get();
        return view('index',compact('lastFour', 'section','advertisement','category_1','category_2','category_3','article_1','article_2','article_3'));
    }
}
