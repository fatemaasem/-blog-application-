<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::create([
            'title'=>'title one',
            'content'=>'content one',
            'author'=>'author one'
        ]);
        Post::create([
            'title'=>'title two',
            'content'=>'content two',
            'author'=>'author two'
        ]);
        Post::create([
            'title'=>'title three',
            'content'=>'content three',
            'author'=>'author three'
        ]);
    }
}
