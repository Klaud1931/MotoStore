<?php
	require_once "connect.php";

	function getNewsk($limitk){
		global $mysqli;
		connectDB();
		$resultk = $mysqli->query("SELECT * FROM `k` ORDER BY `id` DESC LIMIT $limitk");
		closeDB();
		return resultkToArray ($resultk);
	}

	function resultkToArray($resultk){
		$arrayk = array();
		while (($rowk = $resultk->fetch_assoc()) !=false)
			$arrayk[] = $rowk;
		return $arrayk;
	}
?>