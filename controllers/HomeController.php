<?php

namespace Controllers;

use Models\Post;
use Models\User;
use Source\Renderer;

class HomeController
{
    public function index()
    {
        $userModel = new User('users');
        $users = $userModel->all();

        $postModel = new Post('posts');
        $posts = $postModel->all();

        return Renderer::make('home/index', compact('users', 'posts'));
    }
}
