<?php

namespace App\Models;

use Symfony\Component\Validator\Constraints\DateTime;

#[\AllowDynamicProperties]
class User
{
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password)
    {
        if ($this->validate($id, $name, $email, $password)) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->creation_time = new DateTime();
            echo "\nБыл создан объект с параметрами: $id, $name, $email, $password";
        } else
            echo "\nВведены неправильные данные!";
    }

    public function validate_id($id)
    {
        if (is_int($id)) {
            echo "\nvalidated id";
            return true;
        }
        return false;
    }

    public function validate_name($name)
    {
        if (is_string($name)) {
            echo "\nvalidated name";
            return true;
        }
        return false;
    }

    public function validate_email($email)
    {
        if (is_string($email)) {
            echo "\nvalidated email";
            return true;
        }
        return false;
    }

    public function validate_password($password)
    {
        if (is_string($password)) {
            echo "\nvalidated password";
            return true;
        }
        return false;
    }

    public function validate($id, $name, $email, $password)
    {

        if ($this->validate_id($id) and $this->validate_name($name) and $this->validate_email($email) and $this->validate_password($password)) {
            echo "\nValidated data";
            return true;
        }
        return false;
    }

    public function getTime()
    {
        return $this->creation_time;
    }
}
