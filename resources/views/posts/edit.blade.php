@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ url('/posts/'.$post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This tells Laravel to use the PUT method for updating -->
        
        <div>
            <label for="title">Title:</label><br>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" required><br><br>
        </div>
        
        <div>
            <label for="content">Content:</label><br>
            <textarea name="content" required>{{ old('content', $post->content) }}</textarea><br>
        </div>
        
        <button type="submit">Update Post</button>
    </form>
@endsection