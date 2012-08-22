<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		mysql_connect("localhost","zjc","dbconn743215968");
		//isset($_POST["content"])) {
		echo json_encode(array(
			"state"=>"succeed",
		));
	}
?>