<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "../config/dbconn.php";
		$selectMsg = mysql_query("SELECT * FROM `comment` ORDER BY `id` DESC LIMIT ".
			(10 * (intval($_POST["page"]) - 1)).", 10");
		while($row = mysql_fetch_array($selectMsg)) {
			echo "<article>".$row["content"]."</article>";
		}
	}
?>