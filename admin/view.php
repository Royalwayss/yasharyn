<?php
session_start();
include('include/config.php');
if(!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_name'])){
	if(!empty($_GET['id'])){
		 $query="update ".$_GET['table']." set view_status = '1' where id = ".$_GET['id']."";
	     $conn->query($query);
		 echo true;
	}
}



?>