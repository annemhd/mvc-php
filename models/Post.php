<?php

namespace Models;

class Post extends Model
{
    public function postById($value)
    {
        return $this->where('id', $value);
    }
}
