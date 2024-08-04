<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\PostService;
use App\Models\Post;

class PostController extends Controller {
    protected $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }

    public function all() {
        $posts = Post::all();
        return view('posts.all', compact('posts'));
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function delete($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('success', 'Post Deleted successfully');
        return redirect('home');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view("posts.edit", compact('post'));
    }

    public function update(Request $request, $id) {
        $this->postService->update($request, $id);
        return redirect()->back();
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $this->postService->store($request);
        return redirect()->back();
    }
}
