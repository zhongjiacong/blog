<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		mysql_connect("localhost","zjc","dbconn743215968");
		mysql_select_db("blog");
		$query = "INSERT INTO `msg` (`content`, `time`) VALUES ('".$_POST['content']."', NOW())";
		mysql_query($query);
		echo json_encode(array(
			"state"=>"succeed",
		));
	}
?>