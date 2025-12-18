<?php
session_start();
include('include/config.php');
if(!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_name'])){
	if(!empty($_GET['id'])){ 
		 $query="update products set status = '0',is_delete ='1',is_new_arrival=1 where id = ".$_GET['id'].""; 
	     $conn->query($query);
		 $message = 'Product has been deleted successfully';
		 $_SESSION['success_message'] = $message;
		 echo "<script>window.location.href='products.php';</script>";
	}else{
	    echo "<script>window.location.href='products.php';</script>";
	}
}else{
    echo "<script>window.location.href='products.php';</script>";
}



?>