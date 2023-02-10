<?php

namespace App\Models;

class User{
	public $id;
	public $name;
	public $email;
	public $password;

	public function __construct($id, $name, $email, $password){
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		echo "Был создан объект с параметрами: $id, $name, $email, $password";
	}
	public function validate_id()
	{
		if (is_int($this->id)){
			echo "validated id";
			return true; 
		}
		return false;
	}

	public function validate_name()
	{
		if (is_string($this->name))
		{
			echo "validated name";
			return true; 
		}
		return false;
	}

	public function validate_email()
	{
		if (is_string($this->email))
		{
			echo "validated email";
			return true; 
		}
		return false;
	}
	
	public function validate_password()
	{
		if (is_string($this->password))
		{
			echo "validated password";
			return true; 
		}
		return false;
	}
 
	public function validate()
	{        
		if ($this->validate_id() AND $this->validate_name() AND $this->validate_email() AND $this->validate_password()){
			echo "Validated data";
			return true;
		}
		return false;
	}
	
	public function getTime()
    	{
        	if ($this->validate()) {
	            return date("m.d.Y H:i:s", time());
        	}
    	}
}

