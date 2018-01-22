<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'db');
$mysqli->set_charset("utf8");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>