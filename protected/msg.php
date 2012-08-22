<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		mysql_connect("localhost","zjc","dbconn743215968");
		mysql_select_db("blog");
		/*$query = "SELECT * FROM `msg`";
		$result = mysql_query($query);*/
		$query = "INSERT INTO `msg` ()";
		//isset($_POST["content"])) {
		echo json_encode(array(
			"state"=>"succeed",
		));
	}
?>