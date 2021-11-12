<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        return view('cms.tags.index',compact('tags'));
    }

    public function create()
    {
        return view('cms.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:50'
        ]);
        $tag = new Tag();
        $tag->name=$request->get('name');
        $tag->save();
        session()->flash('tag_added');

        return redirect()->route('tags.create');
    }

    public function show(Tag $tag)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('cms.tags.edit',compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name'=>'required|min:3|max:50'
        ]);

        $tag->update([
            'name'=>$request->name
        ]);
        session()->flash('tag_edited');
        return redirect()->route('tags.index');
    }

    public function destroy(Request $request)
    {
        $tag = Tag::findOrFail($request->tag_id);
        $tag->delete();
        session()->flash('tag_deleted');
        return redirect()->route('tags.index');
    }
}
