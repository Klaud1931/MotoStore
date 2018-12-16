<?php
	require_once "connect.php";

	function getNewsl($limitl){
		global $mysqli;
		connectDB();
		$resultl = $mysqli->query("SELECT * FROM `newsl` ORDER BY `id` DESC LIMIT $limitl");
		closeDB();
		return resultlToArray ($resultl);
	}

	function resultlToArray($resultl){
		$arrayl = array();
		while (($rowl = $resultl->fetch_assoc()) !=false)
			$arrayl[] = $rowl;
		return $arrayl;
	}
?>