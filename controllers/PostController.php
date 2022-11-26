<?php

namespace Controllers;

use Models\Post;
use Source\Renderer;

class PostController
{

    public function index()
    {
        $postModel = new Post('posts');
        $posts = $postModel->all();
        return Renderer::make('post/index', compact('posts'));
    }

    public function all()
    {
        $postModel = new Post('posts');
        $posts = $postModel->all();
        return Renderer::make('post/index', compact('posts'));
    }

    public function show()
    {
        $postModel = new Post('posts');
        $posts = $postModel->postById(1);
        return Renderer::make('post/index', compact('posts'));
    }
}
