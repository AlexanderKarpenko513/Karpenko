<?php
include_once 'authorization.html';
session_start();

if(!empty ($_POST['login']) && !empty($_POST['pass']))


    foreach ($_SESSION['users'] as $user)
    {
        if ($user['login'] == $_POST['login'] && ($_POST['pass'] == $user['pass']))
        {
            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user;

        }
        else echo "<a href=register.php>Регистрация</a>";
    }



