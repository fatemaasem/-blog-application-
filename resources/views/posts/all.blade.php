@extends('posts.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        All Posts
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item">
                    <a href="{{url('posts/show',$post->id)}}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
