<?php

namespace Models;

class User extends Model
{
    public function selectUser($value)
    {
        return $this->where('email', $value);
    }
}
