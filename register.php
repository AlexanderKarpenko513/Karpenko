<?php
include_once "register.html";


session_start();
    if (empty($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$check = function ($pass) {

    preg_match ("#((?=.*[a-z])(?=.*[A-Z]).{8,}))#", $pass, $r_pass);
     if(!count($r_pass)){
         echo $q =1;
     }

   // preg_match ("/([\w.]+@[a-zA-Z-]+?\.([a-zA-Z.]){2,6})/",  $login, $users);
   // preg_match ("/([a-zA-Z]{2,})/", $name, $names);


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

};
$check($_POST['pass']);


?>


