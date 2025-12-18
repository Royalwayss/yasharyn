<?php 
session_start(); 
include('include/config.php');
$data = $_POST;
$user_login = ''; 
if(!empty($data['email']) && !empty($data['password'])){
	$sql = "select * from admin where email = '".$data['email']."' and password = '".md5($data['password'])."' and  status = '1'";
	$result = mysqli_query($conn,$sql); 
	$count = mysqli_num_rows($result);
	if(!empty($count)){
		$admin = $result->fetch_array(MYSQLI_ASSOC);
		if(!empty($admin)){ 
			$user_login = true;
			$_SESSION['admin_id'] =  $admin['id'];
			$_SESSION['admin_type'] =  $admin['admin_type'];
			$_SESSION['admin_name'] =  $admin['name'];
			$_SESSION['admin_email'] =  $admin['email'];
			echo '<script>window.location.href="contacts.php"; </script>'; die;
		}
	}
	
}

if($user_login == ''){
	echo '<script>window.location.href="index.php?err"; </script>'; die;
}


?>