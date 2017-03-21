<?php
include_once "register.html";


session_start();
    if (empty($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$user = [
    'name' => $_POST['username'],
    'login' => $_POST['login'],
    'pass'=> $_POST['pass']
];

if(!empty ($user['login']) && !empty($user['name'])&& !empty($user['pass'])&& ($user['pass'] == $_POST['r_pass']))
    {
   array_push ($_SESSION['users'], $user) ;
    echo "Registration successful";
    }
    else echo "password does not match";
?>


