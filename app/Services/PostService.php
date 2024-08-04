<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use App\DTOs\PostDTO;

class PostService {

    public function valid(Request $request) {
        $validatePost = $request->validate([
            'title' => ['required'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string'], 
        ]);

        return new PostDTO($validatePost['title'], $validatePost['content'], $validatePost['author']);//return opject from PostDTO
    }

    public function update(Request $request, $id) {
        // Find post
        $post = Post::findOrFail($id);

        // Validate and create DTO
        $postDTO = $this->valid($request);

        // Update post using DTO data
        $post->update($postDTO->toArray());

        // Set success message
        Session::flash("success", 'Post updated successfully');
    }

    public function store(Request $request) {
        // Validate and create DTO
        $postDTO = $this->valid($request);

        // Store in database
        Post::create($postDTO->toArray());

        // Set success message
        Session::flash("success", 'Post added successfully');
    }
}
