<?php
	function GetIP() {
		if(!empty($_SERVER["HTTP_CLIENT_IP"]))
			$cip = $_SERVER["HTTP_CLIENT_IP"];
		else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
			$cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else if(!empty($_SERVER["REMOTE_ADDR"]))
			$cip = $_SERVER["REMOTE_ADDR"];
		else
			$cip = "";
		return $cip;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!isset($_POST["secret"])) {
			require_once "../config/dbconn.php";
			$query = "INSERT INTO `comment` (`user`, `content`, `time`) VALUES ('".
				GetIP()."', '".$_POST["content"]."', NOW())";
			mysql_query($query);
		}
		
		require_once "../extensions/mailer/EMailer.php";
		$emailer = new EMailer;
        $emailer->CharSet = "UTF-8";
        $emailer->IsSMTP();
        $emailer->SMTPDebug  = 1;
        $emailer->SMTPAuth = TRUE;
        $emailer->Host = "smtp.163.com";
        $emailer->Port = 25;
        $emailer->Username  = "sysuonline";
        $emailer->Password   = "lovelyonline";
        $emailer->From = "sysuonline@163.com";
        $emailer->FromName = "sysuonline";
        if(isset($options['addressname']))
            $emailer->AddAddress("zhongjiacong@gmail.com",$options['addressname']);
        else
            $emailer->AddAddress("zhongjiacong@gmail.com");
        $emailer->Subject = "blog";
        $emailer->MsgHTML(eregi_replace("[\]",'',$_POST['content']));
        //$emailer->Body = $body;
        $emailer->Send();
		
		echo json_encode(array(
			"state"=>"succeed",
		));
	}
?>