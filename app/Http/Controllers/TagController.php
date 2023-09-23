<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Tag::create(['name' => $request->name]);

        return redirect()->route('tags.index')->with('status', 'The tag created successfully');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $tag->update(['name' => $request->name]);

        return redirect()->route('tags.index')->with('status', 'The tag updated successfully');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return back()->with('status', 'The tag deleted successfully');
    }
}
