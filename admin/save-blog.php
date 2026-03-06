<?php
require_once('include/config.php');
$current_time =  date('Y-m-d h:i:s');

if(isset($_POST['title']) && $_POST['title'] !=''){
	
	$title = $_POST['title'];
	$title = mysqli_real_escape_string($conn, $title); 
	$blog_url = $_POST['url'];
	$short_description = trim($_POST['short_description']);
	$short_description = mysqli_real_escape_string($conn, $short_description); 
	$content = trim($_POST['content']);
	$blog_content = mysqli_real_escape_string($conn, $content); 
	$meta_title =$_POST['meta_title'];
	
	$meta_description =$_POST['meta_description'];
	$meta_keywords =$_POST['meta_keywords'];
	
	
	
	$publication_date =$_POST['publication_date'];
	$status =@$_POST['status'];
	
	
	if(isset($_POST['id']) && $_POST['id'] !=''){
		
		$update_query  = "UPDATE  blogs SET title = '".$title."', url = '".$blog_url."',short_description = '".$short_description."',content = '".$blog_content."',meta_title = '".$meta_title."',meta_description = '".$meta_description."',meta_keywords = '".$meta_keywords."',publication_date = '".$publication_date."',status = '".$status."' WHERE id = ".$_POST['id']." "; 
		mysqli_query($conn,$update_query);
		if(isset($_FILES["image"]["name"])){
			
						$target_dir = "../assets/images/blogs/";
						$file_name = rand(11111,99999).'-'.basename($_FILES["image"]["name"]);
						$target_file = $target_dir . $file_name;
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							
							$update_query  = "UPDATE blogs SET image = '".$file_name."' WHERE id = ".$_POST['id']." ";
							
							mysqli_query($conn,$update_query);
						}
					}
					
					
					
					
					
					
					
		$_SESSION['_msg']  ='Blog has been updated successfully';
	}else{
	
	
		
		$insert_query = "INSERT INTO blogs (title,url,short_description,content,publication_date,meta_title,meta_description,meta_keywords,status,created_at) VALUES ('".$title."','".$blog_url."','".$short_description."','".$blog_content."','".$publication_date."','".$meta_title."','".$meta_description."','".$meta_keywords."','".$status."','".$current_time."')";
		mysqli_query($conn,$insert_query); 
		$inser_id = mysqli_insert_id($conn);
		
		if($inser_id != ''){
			        if(isset($_FILES["image"]["name"])){
						
					    $target_dir = "../assets/images/blogs/";
						$file_name = rand(11111,99999).'-'.basename($_FILES["image"]["name"]);
						$target_file = $target_dir . $file_name;
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							
							$update_query  = "UPDATE blogs SET image = '".$file_name."' WHERE id = ".$inser_id." ";
							
							mysqli_query($conn,$update_query);
						}
					}
					
					 
					
					
		}
          
		
		
		
	
		
		
		
		
		$_SESSION['_msg'] = 'Blog has been added successfully';
		
	}
	
	
	
	echo '<script>window.location.href="blogs.php"; </script>'; die;
}

?>
