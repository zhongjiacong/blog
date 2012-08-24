<?php
/**
 * 
 */
class CommentController extends Controller {
	
	public function actionList() {
		$comment = new Comment;
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$list = $comment->query(array(
				"from"=>"`comment`",
				"order"=>"`id` DESC",
				"limit"=>(10 * (intval($_POST["page"]) - 1)).", 10",
			));
			foreach ($list as $key => $value) {
				echo "<article>".$value["content"]."</article>";
			}
		}
	}
	
}