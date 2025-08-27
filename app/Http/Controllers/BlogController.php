<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog posts.
     */
    public function index()
    {
        $posts = Post::where('status', 'published')
                     ->latest()
                     ->paginate(6); // Paginate results to show 6 posts per page

        return view('blogs.index', ['posts' => $posts]);
    }

    /**
     * Display a single blog post.
     */
    public function show(Post $post)
    {
        // Abort if a user tries to access a non-published post directly
        if ($post->status !== 'published') {
            abort(404);
        }

        return view('blogs.show', [
            'post' => $post,
            'meta_title' => $post->title,
            'meta_description' => $post->excerpt,
            'meta_image' => $post->featured_image_url ?? asset('assets/default-og.png'),
        ]);
    }
}