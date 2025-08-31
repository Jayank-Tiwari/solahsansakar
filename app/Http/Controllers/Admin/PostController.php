<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
        $tags = Tag::all();
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
            'tags' => 'nullable|array',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024', // 1MB max
        ]);

        $postData = $validated;
        unset($postData['tags']); // Remove 'tags' from the array

        $postData['slug'] = Str::slug($validated['title']);
        $postData['user_id'] = auth()->id();
        $postData['status'] = 'published'; // Or get from form input

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = 'post_' . time() . '.' . $image->getClientOriginalExtension();

            // Resize and optimize
            $img = Image::make($image)
                ->resize(1200, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 80); // 80% quality for fast load

            // Save to storage/app/public/posts
            \Storage::disk('public')->put('posts/' . $filename, $img);

            $postData['featured_image_url'] = 'storage/posts/' . $filename;
        }

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
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024', // 1MB max
        ]);

        $postData = $validated;
        unset($postData['tags']);

        $postData['slug'] = Str::slug($validated['title']);

        // Handle image upload and removal of old image
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($post->featured_image_url && Storage::disk('public')->exists(str_replace('storage/', '', $post->featured_image_url))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $post->featured_image_url));
            }

            $image = $request->file('featured_image');
            $filename = 'post_' . time() . '.' . $image->getClientOriginalExtension();

            // Resize and optimize
            $img = Image::make($image)
                ->resize(1200, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 80); // 80% quality for fast load

            // Save to storage/app/public/posts
            \Storage::disk('public')->put('posts/' . $filename, $img);

            $postData['featured_image_url'] = 'storage/posts/' . $filename;
        }

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
