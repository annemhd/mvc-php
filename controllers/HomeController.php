<?php

namespace Controllers;

use Models\User;
use Source\Renderer;

class HomeController
{
    public function index()
    {
        $userModel = new User('users');
        $users = $userModel->all();
        return Renderer::make('home/index', compact('users'));
    }
}
