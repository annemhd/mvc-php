<?php

namespace Controllers;

use Models\User;
use Source\Renderer;

class UserController
{
    public function login()
    {
        $userModel = new User('users');
        $users = $userModel->all();
        return Renderer::make('user/index', compact('users'));
    }

    public function dashboard()
    {
        $userModel = new User('users');
        $users = $userModel->all();
        return Renderer::make('user/dashboard', compact('users'));
    }
}
