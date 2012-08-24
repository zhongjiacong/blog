<?php
/**
 * 
 */
class MsgController extends Controller {
	
	private function GetIP() {
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
	
	public function actionSend() {
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$comment = new Comment;
			
			$content = htmlspecialchars($_POST["content"]);
			if(!isset($_POST["secret"])) {
				$comment->user = $this->GetIP();
				$comment->content = $content;
				date_default_timezone_set("RPC");
				$comment->time = time();
				$comment->save();
			}
			
			$emailer = new EMailer;
	        $emailer->CharSet = "UTF-8";
	        $emailer->IsSMTP();
	        $emailer->SMTPDebug  = 1;
	        $emailer->SMTPAuth = TRUE;
	        $emailer->Host = "smtp.163.com";
	        $emailer->Port = 25;
	        $emailer->Username  = "zhongjiacong_com";
	        $emailer->Password   = "743215968";
	        $emailer->From = "zhongjiacong_com@163.com";
	        $emailer->FromName = "zhongjiacong_com";
	        if(isset($options['addressname']))
	            $emailer->AddAddress("zhongjiacong@gmail.com",$options['addressname']);
	        else
	            $emailer->AddAddress("zhongjiacong@gmail.com");
	        $emailer->Subject = "blog";
			$emailer->MsgHtml("IP: ".$this->GetIP()." ".$content);
	        //$emailer->MsgHTML(eregi_replace("[\]",'',"IP: ".$this->GetIP()." ".$content));
	        //$emailer->Body = $body;
	        $emailer->Send();
			
			echo json_encode(array(
				"state"=>"succeed",
				"content"=>$content,
			));
		}
	}

}