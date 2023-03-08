<?php

namespace App\Models;

class Comment
{
    public function __construct(public User $user, public string $message)
    {
        $this->user = $user;
        $this->message = $message;
    }
    public function __toString(){
        return $this->message;
    }
}