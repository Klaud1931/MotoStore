<?php
	$mysqli = false;
	function ConnectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "motostore");
		$mysqli->query("SET NAMES 'utf8'");
	}

	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
?>