<?php
	require_once "connect.php";

	function getNewsb($limitb){
		global $mysqli;
		connectDB();
		$resultb = $mysqli->query("SELECT * FROM `newsb` ORDER BY `id` DESC LIMIT $limitb");
		closeDB();
		return resultbToArray ($resultb);
	}

	function resultbToArray($resultb){
		$arrayb = array();
		while (($rowb = $resultb->fetch_assoc()) !=false)
			$arrayb[] = $rowb;
		return $arrayb;
	}
?>