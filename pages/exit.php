<?php
setcookie('id_user', $user['id_user'], time() - 3600, '/');
setcookie('email', $user['email'], time() - 3600, '/');
setcookie('role', $user['role'], time() - 3600, '/');
header ('Location: /');
?>