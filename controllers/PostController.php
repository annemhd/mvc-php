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

    public function update()
    {
        $postModel = new Post('posts');
        $posts = $postModel->all();
        return Renderer::make('post/update', compact('posts'));
    }

    public function delete()
    {
        $postModel = new Post('posts');
        $posts = $postModel->all();
        return Renderer::make('post/delete', compact('posts'));
    }
}
