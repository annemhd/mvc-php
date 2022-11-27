<?php

namespace Models;

class Post extends Model
{
    public function selectPost($value)
    {
        return $this->where('id', $value);
    }

    public function selectUserPosts($value)
    {
        return $this->where('id_author', $value);
    }

    public function insertPost($sql, $values)
    {
        return $this->insert($sql, $values);
    }

    public function updatePost($value, $sql, $values)
    {
        return $this->update('id', $value, $sql, $values);
    }

    public function deletePost($value)
    {
        return $this->delete('id', $value);
    }
}
