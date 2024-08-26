<?php

namespace App\Http\Controllers;

class PostsController
{
    public function index()
    {
        $posts = [
            1 => "Post 1",
            2 => "Post 2",
            3 => "Post 3"
        ];
        return view('posts', ['posts' => $posts]);
    }

    public function show(int $post)
    {
        $postData = [];
        switch ($post) {
            case 1:
                $postData = [
                    'title' => 'Post 1',
                    'content' => 'Hello world <br/> This is post 1'
                ];
                break;
            case 2:
                $postData = [
                    'title' => 'Post 2',
                    'content' => 'Hello world <br/> This is post 2'
                ];
                break;
            case 3:
                $postData = [
                    'title' => 'Post 3',
                    'content' => 'Hello world <br/> This is post 3'
                ];
                break;
            default:
                return redirect()->route('posts.index');
        }
        return view('post', ['post' => $postData]);
    }
}
