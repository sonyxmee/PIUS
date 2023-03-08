<?php

namespace App\Models;

class Comment
{
    public $user;
    public $message;

    public function __construct($user, $message)
    {
        $this->user = $user;
        $this->message = $message;
    }
    public function __toString(){
        return $this->message;
    }
}