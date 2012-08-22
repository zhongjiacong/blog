<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "dbconn.php";
		$query = "INSERT INTO `comment` (`content`, `time`) VALUES ('".$_POST['content']."', NOW())";
		mysql_query($query);
		echo json_encode(array(
			"state"=>"succeed",
		));
	}
?>