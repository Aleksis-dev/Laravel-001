@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    
    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->content }}
                
                <!-- Edit Button -->
                <button><a href="{{ route('posts.edit', $post->id) }}">Edit</a></button>
                
                <!-- Delete Button -->
                <form action="{{ url('/posts/'.$post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h2>Create a New Post</h2>
    <form action="{{ url('/posts') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content" required></textarea><br>
        <button type="submit">Save Post</button>
    </form>
@endsection