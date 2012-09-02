<?php
/**
 * 
 */
class BlogController extends Controller {
	
	public function actionIndex() {
		$this->model = new BlogModel;
		$page = isset($_POST["page"])?10 * (intval($_POST["page"]) - 1):0;
		$this->model->list = $this->model->query(array(
			"from"=>"`blog`",
			"order"=>"`time` DESC",
			"limit"=>$page.", 10",
		));
		
		$this->render("layouts/main.php");
	}
	
	public function actionAjax() {
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			switch ($_POST["case"]) {
				case "browser":
					echo strpos($_SERVER["HTTP_USER_AGENT"],"Chrome")?"很好，你选择了正确的浏览器^_^":
						"亲，为什么不用chrome浏览器！请自觉换过来。因为，我只用这浏览器来开发= =";
					break;
				default:
					break;
			}
		}
	}
	
}
