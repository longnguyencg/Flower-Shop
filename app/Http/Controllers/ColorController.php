<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.list', compact('colors'));
    }

    public function create()
    {
        $colors = Color::all();
        return view('admin.color.create', compact('colors'));
    }

    public function store(Request $request)
    {
        $colors = new Color();
        $colors->color = $request->color;
        $colors->save();
        return redirect()->route('color.list');

    }

    public function destroy($id)
    {
        $colors = Color::findOrFail($id);
        $colors->delete();
        return redirect()->route('color.list');
    }

    public function edit($id)
    {
        $colors = Color::findOrFail($id);
        return view('admin.color.edit',compact('colors'));
    }

    public function update(Request $request,$id)
    {
        $colors = Color::findOrFail($id);
        $colors->color = $request->input('color');
        $colors->save();
        return redirect()->route('color.list');
    }
}
