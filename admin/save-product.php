<?php
session_start();
 include('include/config.php');
 
 
 $data = $_POST; //echo "<pre>"; print_r($_FILES['images']); exit;
 
 if(!empty($data['product_name']) && $data['category_id'] != ''){
	$product_name = $data['product_name']; 
	$category_id = $data['category_id']; 
	$size = $data['size']; 
	$weight = $data['weight']; 
	$availability = $data['availability'];  
    $ofc = $data['ofc']; 
    $neck = $data['neck']; 
	$product_code = $data['product_code']; 
    $moc = $data['moc']; 
    $sort = $data['sort'];
     $description = @$data['description'];
     
	if(isset($data['status']) && $data['status'] == '1'){
		$status = '1';
	}else{
		$status = '0';
	}
    
	$date = date('Y-m-d H:i:s');
	$description = mysqli_real_escape_string($conn, $description); 
	$product_name = mysqli_real_escape_string($conn, $product_name); 
	$product_url = createSlug($product_name);
	
	
	 $image = '';
	if($data['id'] != ''){
		$id = $data['id'];
		$product_id = $data['id'];
		$image = '';
        if(isset($data['old_image'])){
            $image = $data['old_image'];
        }

         if(!empty($_FILES["image"]["name"])){
				$target_dir = "../assets/images/product/list/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			   
			   if($FileType == 'jpg' || $FileType == 'png' || $FileType == 'jpeg'){
				   $file_name = time().''.rand(10,100).'.'.$FileType;
				   $file_path = $target_dir.''.$file_name;
				   $tmp_name = $_FILES["image"]["tmp_name"];
				   if ( move_uploaded_file($tmp_name, $file_path)) {
					  $image = $file_name;
				   }
				   
			   }
           }



		$sql ="UPDATE `products` SET `category_id` = '".$category_id."', `product_name` = '".$product_name."',`product_url` = '".$product_url."', `description` = '".$description."',`size` = '".$size."',`weight` = '".$weight."',`ofc` = '".$ofc."',`neck` = '".$neck."',`product_code` = '".$product_code."',`moc` = '".$moc."',`availability` = '".$availability."',`image` = '".$image."', `sort` = '".$sort ."', `status` ='".$status."',updated_at = '".$date ."' WHERE `products`.`id` = '".$id ."';";
		$conn->query($sql);
		$message = 'Product has been updated successfully';
	}else{
       
        $image = '';
        if(isset($data['old_image'])){
            $image = $data['old_image'];
        }

         if(!empty($_FILES["image"]["name"])){
				$target_dir = "../assets/images/product/list/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			   
			   if($FileType == 'jpg' || $FileType == 'png' || $FileType == 'jpeg'){
				   $file_name = time().''.rand(10,100).'.'.$FileType;
				   $file_path = $target_dir.''.$file_name;
				   $tmp_name = $_FILES["image"]["tmp_name"];
				   if ( move_uploaded_file($tmp_name, $file_path)) {
					  $image = $file_name;
				   }
				   
			   }
           }
		$sql = "INSERT INTO `products` (`category_id`, `product_name`,`product_url`,`size`, `description`, `weight`, `ofc`, `neck`, `product_code`, `moc`, `availability`,`image`, `sort`, `status`, `created_at`) VALUES ('$category_id','$product_name','$product_url','$size','$description','$weight','$ofc','$neck','$product_code','$moc','$availability','$image', '$sort','$status','$date');";
		$conn->query($sql);  
		
		$message = 'Product has been added successfully';
		
		$product_id  = mysqli_insert_id($conn);

		
		
		
	}
	if(!empty($_FILES["image"]["name"])){
		if(!empty($image)){
			$source_image = '../assets/images/product/list/'.$image; 
			$destination_image =  '../assets/images/product/detail/'.$image; 
			$new_width = 550;
			$new_height = 550;
			resizeImage($source_image, $destination_image, $new_width, $new_height);
		}
	}
	
	
	        $new_images = [];
			
	        if(!empty($_FILES["images"]["name"])){
				
				$target_dir = "../assets/images/product/list/";
				foreach($_FILES["images"]["name"] as $img_key=>$img_file){ 
					$target_file = $target_dir . basename($_FILES["images"]["name"][$img_key]); 
					$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					if($FileType == 'jpg' || $FileType == 'png' || $FileType == 'jpeg'){  
					   $file_name = time().''.rand(10,100).'.'.$FileType; 
					   $file_path = $target_dir.''.$file_name;
					   $tmp_name = $_FILES["images"]["tmp_name"][$img_key];
					   if ( move_uploaded_file($tmp_name, $file_path)) {
						  $new_images[] = $file_name;
						  if(!empty($data['image_sort'][$img_key])){
							  $image_sort = $data['image_sort'][$img_key];
						  }else{
							  $image_sort = 0;
						  }
						  
						  $insert_sql = "insert into `product_images` (product_id,image,image_order,created_at) values ('$product_id', '$file_name', '$image_sort', current_timestamp());";
		                  
						  $conn->query($insert_sql); 
						  
					   }
					}
				}
			   
			   
           }
	
	if(!empty($new_images)){
		foreach($new_images as $image){
			$source_image = '../assets/images/product/list/'.$image; 
			$destination_image =  '../assets/images/product/detail/'.$image; 
			$new_width = 550;
			$new_height = 550;
			resizeImage($source_image, $destination_image, $new_width, $new_height);
		}
	}
	
	
	$_SESSION['success_message'] = $message;
	echo "<script>window.location.href='products.php';</script>";
 }else{
	 echo "<script>window.location.href='products.php';</script>";
 }
 
 
 
 
 
?>