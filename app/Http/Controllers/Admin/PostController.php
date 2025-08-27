<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('author')->latest()->get();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = \App\Models\Tag::all();
        return view('admin.posts.create', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'tags' => 'nullable|array'
        ]);

        $postData = $validated;
        unset($postData['tags']); // Remove 'tags' from the array

        $postData['slug'] = Str::slug($validated['title']);
        $postData['user_id'] = auth()->id();
        $postData['status'] = 'published'; // Or get from form input

        $post = Post::create($postData); // Only insert columns that exist

        if ($request->filled('tags')) {
            $post->tags()->attach($request->tags); // Attach tags via pivot table
        }

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
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
        // Fetch all tags to populate the multi-select dropdown
        $tags = Tag::all();

        return view('admin.posts.edit', [
            'post' => $post,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'tags' => 'nullable|array',
            'status' => 'required|in:draft,published',
        ]);

        $postData = $validated;
        unset($postData['tags']);

        $postData['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        $post->update($postData);

        // Sync tags
        $post->tags()->sync($request->tags ?? []);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
