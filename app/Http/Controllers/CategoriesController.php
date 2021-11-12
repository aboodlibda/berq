<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(15);
        return view('cms.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('cms.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:50'
        ]);
        $category = new Category();
        $category->name=$request->get('name');
        $category->save();
        session()->flash('category_added');

        return redirect()->route('categories.create');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('cms.categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required|min:3|max:50'
        ]);

        $category->update([
            'name'=>$request->name
        ]);
        session()->flash('category_edited');
        return redirect()->route('categories.index');

    }

    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->category_id);
        $category->delete();
        session()->flash('category_deleted');
        return redirect()->route('categories.index');
    }
}
