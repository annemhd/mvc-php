<?php

namespace Models;

class Post extends Model
{
    public function selectPost($value)
    {
        return $this->where('id', $value);
    }

    public function deletePost($value)
    {
        return $this->delete('id', $value);
    }

    public function updatePost($value, $sql, $values)
    {
        return $this->update('id', $value, $sql, $values);
    }
}
