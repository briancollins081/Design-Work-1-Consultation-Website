<?php
require('process.php');
$user= new UserModel;
$_SESSION['pro']=$user->profession();
$user->login();
$user->register();
$user->speconsult();
$user->genConsult();
$forum=$user->forum();
$user->answer();
$user->comment();
$user->flag();
$user->postq();


