<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index()
    {
        $section = Section::first();
        $categories = Category::all();
        return view('cms.sections.index',compact('categories','section'));
    }




    public function update(Request $request, Section $section)
    {

        $section->update([
            'section_1' => $request->section_1,
            'section_2' => $request->section_2,
            'section_3' => $request->section_3
        ]);
        $section->save();

        session()->flash('sections_edited');
        return redirect()->route('sections.index');
    }


}
