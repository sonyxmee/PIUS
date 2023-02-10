<?php

require_once "vendor/autoload.php";

use App\Models\User;

 echo "test";

 $myobj = new User(1, 'Sofia', 'test@mail.ru', 'qwerty123');
 echo "<br />";
 echo $myobj->id;
 echo "<br />";
 echo $myobj->name;
 echo "<br />";
 echo $myobj->email;
 echo "<br />";
 echo $myobj->password;
 echo "<br />";
 echo $myobj->validate_id();
 echo "<br />";
 echo $myobj->validate_name();
 echo "<br />";
 echo $myobj->validate_email();
 echo "<br />";
 echo $myobj->validate_password();
 echo "<br />";
 echo $myobj->validate();
 echo "<br />";
 echo $myobj->getTime();