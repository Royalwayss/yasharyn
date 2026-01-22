<?php
session_start();
include('include/config.php');
if(!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_name'])){
	if(!empty($_GET['id'])){ 
		 $query="delete from product_images where `product_images`.`id` = ".$_GET['id']; 
	     $conn->query($query);
		 $result['status'] = true;
		 echo json_encode($result);
         
		 //$message = 'Product has been deleted successfully';
		 //$_SESSION['success_message'] = $message;
		 // echo "<script>window.location.href='products.php';</script>";
	}else{
	    //echo "<script>window.location.href='products.php';</script>";
	}
}else{
   // echo "<script>window.location.href='products.php';</script>";
}



?>