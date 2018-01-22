<?php
session_start();
ini_set("display_errors",1);
error_reporting(E_ALL);
include('conf.php');
if(isset($_GET['logout'])) {
	unset($_SESSION);
	session_destroy();
	header('Location: /');
	die();
}

$response = array(); 

$login1 = isset($_POST['login']) ? $_POST['login'] : false; 
$password1 = isset($_POST['password']) ? $_POST['password'] : false;

if (!$login1 || !$password1) {
    $response['ok'] = 0; 
    $response['message'] = 'Заполните поля'; 
    die(json_encode($response)); 
}

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
    $response['ok'] = 1;
    $response['message'] = 'Успех';
    die(json_encode($response));
}

if ($alright == 0) {
    $response['ok'] = 0;
    $response['message'] = 'Неверный логин/пароль';
    die(json_encode($response));
}




if(isset($_POST['action']) && $_POST['action'] == "register") {
	if(isset($_POST['login']) && isset($_POST['password']) && $_POST['login'] != "" && $_POST['password'] != "") {
		include('conf.php');
		$search = $mysqli->query("SELECT * FROM `vkauth`", MYSQLI_USE_RESULT);
		$res = array();
		while($rows = mysqli_fetch_assoc($search)){
			$res[] = $rows;
		}
		if(!in_array($_POST['login'], $res[0])) {
			$password = md5(md5($_POST['password']));
			include('conf.php');
			$mysqli->query("INSERT INTO `vkauth` (`nickname`, `password`, `vk_id`, `regdate`) VALUES ('".$_POST['login']."', '".$password."', '".$_SESSION['vkid']."', '".time()."')", MYSQLI_USE_RESULT);
			$_SESSION['nickname'] = $_POST['login'];
			header('Location: /');
			die();
		} else {
			header('Location: /reg?isset');
			die();
		}
	}
}
?>