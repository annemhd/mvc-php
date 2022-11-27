<?php

namespace Models;

class Comment extends Model
{
    public function selectComment($value)
    {
        return $this->where('id_post', $value);
    }

    public function insertComment($sql, $values)
    {
        return $this->insert($sql, $values);
    }

    public function updateComment($value, $sql, $values)
    {
        return $this->update('id', $value, $sql, $values);
    }

    public function deleteComment($value)
    {
        return $this->delete('id', $value);
    }
}
