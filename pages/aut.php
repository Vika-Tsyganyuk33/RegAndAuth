<?php
$email2 = filter_var(trim($_POST['email2']));
$pass2 = filter_var(trim($_POST['pass2']));

$pass2 = md5($pass2."test");

include './db.php';
$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email2' AND `pass` = '$pass2'");
$user = $result->fetch_assoc();

setcookie('id_user', $user['id_user'], time() + 3600, '/');
setcookie('email', $user['email'], time() + 3600, '/');
setcookie('role', $user['role'], time() + 3600, '/');
$mysql->close();
header('Location: /pages/pers.php');
?>