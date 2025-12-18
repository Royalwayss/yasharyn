<?php
session_start();
 include('include/config.php');
 
 
 $data = $_POST;
 
 if(!empty($data['category_name']) && $data['category_name'] != ''){
	$category_name = $data['category_name']; 
	
	if(isset($data['parent_id']) && !empty($data['parent_id'])){
		$parent_id = $data['parent_id'];
	}else{
		$parent_id = 0;
	} 
	$description = $data['description']; 
	$sort = $data['sort']; 
	if(isset($data['status']) && $data['status'] == '1'){
		$status = '1';
	}else{
		$status = '0';
	}
	$date = date('Y-m-d H:i:s');
	$description = mysqli_real_escape_string($conn, $description); 
	$category_name = mysqli_real_escape_string($conn, $category_name); 
	$category_image = '';
	
	 if(!empty($_FILES["category_image"])){
		$target_dir = "../assets/images/category/";
		$target_file = $target_dir . basename($_FILES["category_image"]["name"]);
		$uploadOk = 1;
		$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	   
	   if($FileType == 'jpg' || $FileType == 'png' || $FileType == 'jpeg'){
		   $file_name = time().''.rand(10,100).'.'.$FileType;
		   $file_path = $target_dir.''.$file_name;
		   $tmp_name = $_FILES["category_image"]["tmp_name"];
		   if ( move_uploaded_file($tmp_name, $file_path)) {
			  $category_image = $file_name;
		   }
		   
	   }
   }
	
	

	
	
	
	
	
	
	if($data['id'] != ''){
		$id = $data['id'];
		
		if(empty($category_image)){
			$category_image = $data['old_category_image'];
		}
		
		
		
		
		$sql ="UPDATE `categories` SET `parent_id` = '".$parent_id."', `category_name` = '".$category_name."', `description` = '".$description."', `category_image` = '".$category_image ."', `sort` = '".$sort ."', `status` ='".$status."',updated_at = '".$date ."' WHERE `categories`.`id` = '".$id ."';";
		$conn->query($sql);
		$message = 'Category has been updated successfully';
	}else{
		$sql ="INSERT INTO `categories` (`parent_id`, `category_name`, `description`,category_image, `sort`, `status`,created_at) VALUES ('".$parent_id."','".$category_name."','".$description."', '".$category_image."', '".$sort."','".$status."','".$date."');";
		$conn->query($sql); 
		$message = 'Category has been added successfully';
	}
	
	$_SESSION['success_message'] = $message;
	echo "<script>window.location.href='categories.php';</script>";
 }else{
	 echo "<script>window.location.href='categories.php';</script>";
 }
 
 
 
 
 
?>