<?php
ob_start();
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cars';
$sql = new mysqli($db_host, $db_user, $db_pass, $db_name);
mysqli_set_charset($sql,"utf8");
$sql->query("SET NAMES utf8");
require_once ("class.php");
$select = new Select();

?>