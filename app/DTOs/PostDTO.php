<?php

namespace App\DTOs;

class PostDTO {
    public $title;
    public $content;
    public $author;

    public function __construct($title, $content, $author) {
        $this->title = strtoupper($title); // Convert title to uppercase
        $this->content = $content;
        $this->author = $author;
    }

    public function toArray() {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
        ];
    }
}
