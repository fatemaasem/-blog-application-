@extends('posts/layouts/app')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Post
    </div>
    <div class="card-body">
        <form action="{{ url('posts/update', $post->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="{{ $post->author }}" >
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
