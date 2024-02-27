<?php
$name = filter_var(trim($_POST['name']));
$email = filter_var(trim($_POST['email']));
$pass = filter_var(trim($_POST['pass']));

$pass = md5($pass."test");

include('./db.php');

$mysql->query("INSERT INTO `users` (`name`, `email`, `pass`, `role`) VALUES ('$name', '$email', '$pass', 1);");
$mysql->close();
header('Location: /');
?>