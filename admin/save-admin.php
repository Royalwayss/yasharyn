<?php
session_start();
 include('include/config.php');
 
 
 $data = $_POST; 
 
 if(!empty($data['name']) && $data['name'] != ''){
	$name = $data['name']; 
	$email = $data['email']; 
	$date = date('Y-m-d H:i:s');
	if(isset($data['status']) && $data['status'] == '1'){
		$status = '1';
	}else{
		$status = '0';
	}
    
	
	if($data['id'] != ''){
		$id = $data['id'];
		
		if(isset($data['password']) && $data['password'] != ''){
			$password = md5($data['password']);

		}else{
			$password = $data['hidden_password'];

		}
		
		
		
		$sql ="UPDATE `admin` SET `name` = '".$name."',password= '".$password."', `status` ='".$status."',updated_at = '".$date ."' where  admin_type = 2 and `admin`.`id` = '".$id ."';";
		$conn->query($sql);
		$message = 'Subadmin has been updated successfully';
	}else{
        $password = md5($data['password']);

		$sql = "INSERT INTO `admin` (`name`, `email`,`password`, `status`, `admin_type`,`created_at`) VALUES ('$name','$email','$password','$status','2','$date');";
		$conn->query($sql);  
		
		$message = 'Subadmin has been added successfully';
	}
	
	
	$_SESSION['success_message'] = $message;
	echo "<script>window.location.href='subadmins.php';</script>";
 }else{
	 echo "<script>window.location.href='subadmins.php';</script>";
 }
 
 
 
 
 
?>