<?php
if(!isset($_SESSION)) session_start(); 
if(isset($_SESSION['siriusNick']) || isset($_SESSION['siriusAdmin']) || isset($_SESSION['siriusHelp'])){
unset($_SESSION['siriusNick']);
unset($_SESSION['siriusAdmin']);
unset($_SESSION['siriusHelp']);
session_destroy();
}
header("Location: ".$_SERVER['HTTP_REFERER']);
?>