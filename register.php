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

$reg_check = function ($pass,$login,$name) {
    preg_match("/([a-zA-Z]{2,})/", $name, $names);
    preg_match("/((?=.*[a-z])(?=.*[A-Z]).{8,}))/", $pass, $r_pass);
    preg_match("/([\w.]+@[a-zA-Z-]+?\.([a-zA-Z.]){2,6})/",  $login, $userr);

};

if(!empty ($user['login']) && !empty($user['name'])&& !empty($user['pass'])&& ($user['pass'] == $_POST['r_pass']))
    {
   array_push ($_SESSION['users'], $user) ;
    echo "Registration successful";
    }

if ($_POST){
    $reg_check($_POST['pass'], $_POST['login'], $_POST['username']);
}

?>


