<?php
session_start();
include('include/config.php');
if(!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_name'])){
	if(!empty($_GET['imagesort'])){ 
		 $query="update product_images set image_order = '".$_GET['imagesort']."' where id = ".$_GET['imageid'].""; 
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