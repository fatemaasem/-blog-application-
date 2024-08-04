@extends('posts.layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        {{ $post->title }}
    </div>
    <div class="card-body">
        <p>{{ $post->content }}</p>
        <a href="{{ url('posts/edit', $post->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ url('posts/delete', $post->id) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

@endsection
