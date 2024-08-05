<?php

// namespace App\DTOs;

// class PostDTO {
//     public $title;
//     public $content;
//     public $author;

//     public function __construct($title, $content, $author) {
//         $this->title = strtoupper($title); // Convert title to uppercase
//         $this->content = $content;
//         $this->author = $author;
//     }

//     public function toArray() {
//         return [
//             'title' => $this->title,
//             'content' => $this->content,
//             'author' => $this->author,
//         ];
//     }
// }
namespace App\DTOs;

class PostDTO {
    public $title;
    public $content;
    public $author;

    public function toArray($arrayData) {
        $this->title = strtoupper($arrayData['title']); // Convert title to uppercase
        $this->content =$arrayData['content'] ; 
        // Set the author (nullable)
        $this->author = $data['author'] ?? null;
        return [
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
        ];
    }
}
