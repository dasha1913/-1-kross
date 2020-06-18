<?php
session_start();

$admin = 'admin';
$pass = '21232f297a57a5a743894a0e4a801fc3';


if($_POST['submit']){
  if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
$_SESSION['admin'] = $admin;
header("location: admin.php");
exit;
} else echo '<p>Логин или пароль неверны !</p>';
}
$admin = '';
$pass = '';


if($_POST['submit']){
  if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
$_SESSION['admin'] = $admin;
header("location: ");
exit;
} else echo '<p>Логин или пароль неверны !</p>';
}
?>
<p><a href="index.php">Главная</a></p>
</hr>
Это страница авторизации.
</br>
<form method="post">
   Username: <input type="text" name="user" /><br/>
   Password: <input type="password" name="pass" /><br/>
<input type="submit" name="submit" value="Войти" />
</form>