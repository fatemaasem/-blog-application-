@extends('posts.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Create New Post
    </div>
    <div class="card-body">
        <form action="{{url('posts/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</div>
@endsection
