<?php
class Select{
	//$sql->sql=$sql;
	function SelectCar(){
		global $sql;
		$res=$sql->query('select * from car');
		return $res;
	}
	
}
?>