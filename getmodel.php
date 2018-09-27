<?php
$carid = intval($_GET['carid']);
require_once('config.php');
$sql->query("SET NAMES utf8");

if(isset($_GET['carid'])){
	$query="SELECT * FROM model WHERE carid = '".$carid."'";
	$res = $sql->query($query);
		echo "<option value='' selected disabled>Select model</option>";
	foreach($res as $row) {
		echo "<option value='".$row['id']."'>".$row['model']."</option>";
	}
}

?>