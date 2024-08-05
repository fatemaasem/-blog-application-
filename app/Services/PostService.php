<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use App\DTOs\PostDTO;

class PostService {
    protected $dto;
    public function __construct(PostDTO $dto)
    {
        $this->dto = $dto;
    }

    protected function valid(Request $request): array
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string'],
        ]);

        // Transform validated data into PostDTO array format
        return $this->dto->toArray($validatedData);
    }

    public function update(Request $request, $id) {
        // Find post
        $post = Post::findOrFail($id);

        // Validate and create DTO
        $postDTO = $this->valid($request);

        // Update post using DTO data
        $post->update($postDTO);

        // Set success message
        Session::flash("success", 'Post updated successfully');
    }

    public function store(Request $request) {
        // Validate and create DTO
        $postDTO = $this->valid($request);

        // Store in database
        Post::create($postDTO);//is array

        // Set success message
        Session::flash("success", 'Post added successfully');
    }
}
