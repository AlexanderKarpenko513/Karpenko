<?php
include_once "register.html";


session_start();
    if (empty($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$check = function ($pass, $login, $name) {

    preg_match ("/([\w.]+@[a-zA-Z-]+?\.[a-zA-Z.]{2,6})/",  $login, $users);
     if(!empty ($_POST['login'])&& !count($users)){
         echo "введите email корректно <br>";
     }


    preg_match ("/([a-zA-Z]{2,})/", $name, $names);
    if(!count($names)&& !empty($_POST['username'])){
        echo "введите имя корректно <br>";
    }


    preg_match ("#((?=.*[a-z])(?=.*[A-Z]).{8,})#", $pass, $r_pass);
    if(!empty($_POST['pass']) && !count($r_pass)){
        echo "пароль не верный <br>";
    }
};
    $user = [
        'name' => $_POST['username'],
        'login' => $_POST['login'],
        'pass'=> $_POST['pass']
    ];


if(!empty ($user['pass']) && ($user['pass'] == $_POST['r_pass']))
    {
   array_push ($_SESSION['users'], $user) ;
    echo "Registration successful";
    }


$check($_POST['pass'],$_POST['login'],$_POST['username']);


?>


