<?php

namespace Controllers;

use Models\Post;
use Models\User;
use Source\Renderer;

class ComController
{
    public function comment()
    {
        $userModel = new User('users');
        $users = $userModel->all();

        $postModel = new Post('posts');
        $posts = $postModel->all();

        return Renderer::make('post/comment', compact('users', 'posts'));
    }
}
