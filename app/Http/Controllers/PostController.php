<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Save a new post
    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        return redirect()->route('posts.index');
    }

    // Show the edit form
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    // Update a post
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Find the post by ID
        $post = Post::findOrFail($id);

        // Update the post with validated data
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save(); // Save the updated post

        // Redirect back to the post list with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    // Delete a post
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}