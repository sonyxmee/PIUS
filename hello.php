<?php

require_once "vendor/autoload.php";

use App\Models\User;
use App\Models\Comment;

$time = new DateTime('now');

$user0 = new User(1, 1, 'test1@mail.ru', 'qwerty123');
$user1 = new User(1, 'Name1', 'test1@mail.ru', 'qwerty123');
$user2 = new User(2, 'Name2', 'test2@mail.ru', 'qwerty123');
$user3 = new User(3, 'Name3', 'test3@mail.ru', 'qwerty123');
$user4 = new User(4, 'Name4', 'test4@mail.ru', 'qwerty123');

$com1 = new Comment($user1, 'user1');
$com2 = new Comment($user2, 'user2');
$com3 = new Comment($user3, 'user3');
$com4 = new Comment($user4, 'user4');

$arr = [$com1, $com2, $com3, $com4];
foreach ($arr as $value) {
    if ($value->user->getTime() > $time->format("m.d.Y H:i:s")) {
        echo "\n" . $value;
    }

}
