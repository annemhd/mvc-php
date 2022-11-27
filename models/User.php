<?php

namespace Models;

class User extends Model
{
    public function selectUser($value)
    {
        return $this->where('email', $value);
    }

    public function selectUserPosts($value)
    {
        return $this->where('id_author', $value);
    }
}
