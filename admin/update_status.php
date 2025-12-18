<?php
session_start();
include('include/config.php'); 
if(!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_name'])){
	if(isset($_POST['status'])){
		 $query="update ".$_POST['table']." set ".$_POST['column']." = '".$_POST['status']."' where id = ".$_POST['id']."";
	     $conn->query($query);
		 echo true;
	}
}



?>