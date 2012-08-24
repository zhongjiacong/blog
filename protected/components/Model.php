<?php

/**
 * 
 */
class Model {
	
	public function __construct() {
		$this->connectDB();
	}
	
	private function connectDB() {
		$db = Blog::getInstance()->getDB();
		$connect = mysql_connect($db["host"],$db["username"],$db["password"]);
		mysql_query("SET NAMES utf8", $connect);
		mysql_select_db($db["dbname"]);
	}
	
	public function query($array) {
		$select = isset($array["select"])?addslashes($array["select"]):"*";
		$order = isset($array["order"])?" ORDER BY ".addslashes($array["order"]):"";
		$from = isset($array["from"])?addslashes($array["from"]):"`".strtolower(get_class($this))."`";
		$limit = isset($array["limit"])?addslashes($array["limit"]):"10";
		
		$query = mysql_query("SELECT ".$select." FROM ".$from.$order." LIMIT ".$limit);
		
		$result = array();
		while($row = mysql_fetch_array($query)) {
			array_push($result,$row);
		}
		return $result;
	}
	
	public function save() {
		$origin = get_class_vars(strtolower(get_class($this)));
		
		$array = array();
		foreach ($origin as $key => $value) {
			if(isset($this->$key))
				$array[$key] = $this->$key;
		}
		
		if(!empty($array)) {
			$arrayKey = array_keys($array);
			$insert = "";
			foreach ($arrayKey as $key => $value) {
				$insert .= "`".$value."`";
				if($key != (count($arrayKey) - 1))
					$insert .= ", ";
			}
			
			foreach ($array as $key => $value) {
				$array[$key] = addslashes($value);
			}
			
			$values = "";
			foreach ($array as $key => $value) {
				$values .= "'".$value."'";
				if($key != $arrayKey[count($array) - 1])
					$values .= ", ";
			}
			
			$query = "INSERT INTO `".strtolower(get_class($this)).
				"` (".$insert.") VALUES (".$values.")";
			mysql_query($query);
		}
	}
	
}
