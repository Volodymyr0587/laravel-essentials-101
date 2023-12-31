<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts')); //['posts' => $posts]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('posts');
        }

        // dd($validatedData);
        $post = Post::create($validatedData);
        if ($request->has('tags')) {
            $post->tags()->attach($request->tags);
        }

        return redirect()->route('posts.index')->with('status', 'The post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $published = 0;
        if ($request->has('is_published')) {
            $published = 1;
        }
        if ($request->hasFile('image')) {
            // Storage::delete($post->image);
            $post->image = $request->file('image')->store('posts');
        }

        $post->update($request->validated() + [
            'is_published' => $published,
            'image' => $post->image,
        ]);

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('status', 'The post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        // Storage::delete($post->image);

        // $post->tags()->detach(); // NOT need anymore, because of cascadeOnDelete()
        $post->delete();
        return back()->with('status', 'The post deleted successfully');
    }
}
