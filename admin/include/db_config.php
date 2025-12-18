<?php
	date_default_timezone_set("Asia/Kolkata");
	if($_SERVER['HTTP_HOST'] == 'localhost'){
		$base_url = 'http://localhost/yasharyn_git/yasharyn/';
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "yasharyn";
	}else{
		$base_url = 'https://www.yasharyn.com/new/';
		$servername = "localhost";
		$username = "yasharyn_usr";
		$password = "p7Db9D[9sh0@";
		$dbname = "yasharyn_newdb";
	}
?>