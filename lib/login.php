<?php
if(!isset($_SESSION)) session_start(); 
ini_set('session.gc_maxlifetime', 10000000000);
include('users.php');

$response = array(); // сюда будем писать то что будем возвращать скрипту

$login1 = isset($_POST['login']) ? $_POST['login'] : false; // сунем каждое поле в отдельную переменную
$password1 = isset($_POST['password']) ? $_POST['password'] : false;

/*function AuthMeCheck($login, $password) {
	$login = mb_strtolower($login);
	include("base.php");
	$result = $mysqli1->query("SELECT * FROM `authme` WHERE `username` = '".$login."'", MYSQLI_USE_RESULT);
	$result = mysqli_fetch_assoc($result)['password'];
	echo $result;
	$pwd = explode('$', $result);
	if(strcasecmp(trim($pwd[3]), hash('sha256', hash('sha256', $password).$pwd[2])) == 0)
	{
		return 1;
	}
} */

if (!$login1 || !$password1) {
    $response['ok'] = 0; // пишем что все плохо
    $response['message'] = '<div class="card card-danger text-xs-center"><div class="card-block"><p style="margin: 0 !important;" class="white-text">Заполните поля</p></div></div>'; // пишем ответ
    die(json_encode($response)); //выводим массив в json формате и умираем
}
/*
if (!in_array($login1, $admin) && $login1 !== "Solac") {
    $response['ok'] = 0; // пишем что все плохо
    $response['message'] = '<div class="card card-danger text-xs-center"><div class="card-block"><p style="margin: 0 !important;" class="white-text">Доступно только администраторам</p></div></div>'; // пишем ответ
    die(json_encode($response)); //выводим массив в json формате и умираем
}
*/
if ($login1 && $password1) {
	$login = mb_strtolower($login1);
	include("base.php");
	$result = $mysqli1->query("SELECT * FROM `authme` WHERE `username` = '".$login."'", MYSQLI_USE_RESULT);
	$result = mysqli_fetch_assoc($result)['password'];
	$pwd = explode('$', $result);
	if(strcasecmp(trim($pwd[3]), hash('sha256', hash('sha256', $password1).$pwd[2])) == 0)
	{
		$alright = 1;
		$login2 = mb_strtolower($_POST['login']);
		$result2 = $mysqli1->query("SELECT * FROM `authme` WHERE `username` = '".$login2."'", MYSQLI_USE_RESULT);
		$result2 = mysqli_fetch_assoc($result2)['realname'];
		if(in_array($result2, $admin)) $_SESSION['siriusAdmin'] = TRUE;
		if(in_array($result2, $helper)) $_SESSION['siriusHelp'] = TRUE;
		$_SESSION['siriusNick'] = $result2;

	} else $alright = 0;
}

if ($alright == 1) {
    $response['ok'] = 1; // пишем что все плохо
    $response['message'] = '<div class="card card-success text-xs-center"><div class="card-block"><p style="margin: 0 !important;" class="white-text">Успех</p></div></div>'; // пишем ответ
    die(json_encode($response)); //выводим массив в json формате и умираем
}

if ($alright == 0) {
    $response['ok'] = 0; // пишем что все плохо
    $response['message'] = '<div class="card card-danger text-xs-center"><div class="card-block"><p style="margin: 0 !important;" class="white-text">Неверный логин/пароль</p></div></div>'; // пишем ответ
    die(json_encode($response)); //выводим массив в json формате и умираем
}
?>