<?
include_once "search.html";
session_start();
$search = $_GET['login'];
$walk =  function ($user) use ($search)
{
    if ($user['login'] == $search)
    {
    echo '<table>';
    echo '<tr><th> Name </th><th>Login</th></tr>';
    echo "<tr><td> {$user['name']} </td><td>{$user['login']}</td></tr>";
    echo '</table>';
    }
    elseif ($user['name'] !== $_SESSION['username'])
    {
        echo "<a href=register.php>Регистрация</a><br>";
        echo "<a href=authorization.php>Автороизация</a>";

    }

};
array_walk($_SESSION['users'], $walk);

