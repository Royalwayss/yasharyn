<?php
 
    include(__DIR__.'/'.'db_config.php');
	define('BASE_URL',$base_url);
	define('SITE_LOGO',$base_url.'assets/images/logo.png');
	define('WEBSITENAME','Yasharyn');
	define('FROM_MAIL','info@yasharyn.com');
	define('ADMIN_MAIL','rwpttech@gmail.com');
	define('RECAPTCHA_SITE_KEY','6Ldx-AosAAAAAJxdP2-YhrveSlk1PiwHPU3i9Y0b');
	define('RECAPTCHA_SECRET_KEY','6Ldx-AosAAAAABj5zF9tJ5SpW7rOb0N96c3mtxnG');
 
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error); exit;
	} 
	
	
	
function get_counties($conn) {
	$counties = [];
	
	$sql = 'select id,name as country from `countries` group by name order by `countries`.`name` asc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
            $counties[] = $row;
        }
    }

    return $counties;	
}



function get_state_options($conn,$country_id) {
	$state_options = '<option value="" disabled selected>Select your state</option>';
	
	$sql = 'select * from `states` where `country_id` = '.$country_id.' group by name order by name asc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $state_options .= '<option value="'.$row['name'].'"  data-id="'.$row['id'].'">'.$row['name'].'</option>';
			  
        }
    }

    return $state_options;	
}


function get_city_options($conn,$state_id) {
	$city_options = '<option value="" disabled selected>Select your city</option>';
	
	$sql = 'select * from `cities` where `state_id` = '.$state_id.' group by name order by name asc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $city_options .= '<option value="'.$row['name'].'">'.$row['name'].'</option>';
			  
        }
    }

    return $city_options;	
}

function get_blogs($conn) {
	
	$blogs = [];
	
	$sql = 'select id,title,url,short_description,publication_date,image,sort from blogs where status = 1 order by publication_date desc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $blogs[] = $row;
			  
        }
    }

    return $blogs;	
} 

function getSingleRow($conn,$query) {
	
	$data = []; 
	
	$result = $conn->query($query); 
    
    if ($result->num_rows > 0) { 
    
        $data = $result->fetch_assoc();
  
    }

    return $data;	
}


function get_categories($conn,$status='') {
	
	$categories = [];
	
	$sql = 'select * FROM `categories` where `parent_id` = 0' ;
	
	if($status == '1'){
		$sql .= ' and status  =1 ';
	}
	
	$sql .= ' order by sort asc'; 
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 

             $sub_categories = [];

             $sub_cat_sql = 'select * FROM `categories` where `parent_id` = '.$row['id'];
			 
			 if($status == '1'){
		      $sub_cat_sql .= ' and status  =1';
	         }
			 
			 $sub_cat_sql .= ' order by sort asc'; 
	
			 $sub_cat_result = $conn->query($sub_cat_sql); 

             if ($sub_cat_result->num_rows > 0) { 

				while ($sub_category_row = $sub_cat_result->fetch_assoc()) { 
                    
					
					/* sub cat2 */
					      $sub2_categories = [];

						 $sub_cat2_sql = 'select * FROM `categories` where `parent_id` = '.$sub_category_row['id'];
						 
						 if($status == '1'){
						  $sub_cat2_sql .= ' and status  =1';
						 }
						 
						 $sub_cat2_sql .= ' order by sort asc'; 
				
						 $sub_cat2_result = $conn->query($sub_cat2_sql); 

						 if ($sub_cat2_result->num_rows > 0) { 

							while ($sub_cat2_row = $sub_cat2_result->fetch_assoc()) { 
								$sub2_categories[] = $sub_cat2_row;
							}

						 }
					/* sub cat2 */
					
					
					
					$sub_category_row['sub_categories2'] = $sub2_categories;
					
					
					
					
					
					$sub_categories[] = $sub_category_row;
				}

			 }



            $row['sub_categories'] = $sub_categories;
            $categories[] = $row;
        }
    }

    return $categories;	
}	
	
function get_products($conn,$category_id,$filter_data) { 
	
	
	if (is_array($category_id)) {
        $cats_id = $category_id;
	} elseif (is_string($category_id)) {
		$cats_id[] = $category_id;
	}else{
		$cats_id = [];
	}
	
	$cats_id_implode = implode(',',$cats_id);
	
	$products = []; 
	
	$sql = 'select products.*,categories.category_name from `products` INNER JOIN categories
ON categories.id = products.category_id where `category_id` IN  ('.$cats_id_implode.') and products.status = "1"';
    
	
	if(!empty($filter_data)){
		
		
		if(isset($filter_data['size']) && !empty($filter_data['size']) && isset($filter_data['weight']) && !empty($filter_data['weight']) ){
			     $size_list = "'" . implode("', '", $filter_data['size']) . "'";
				 $weight_list = "'" . implode("', '", $filter_data['weight']) . "'";
		
	    }else{	
			if(isset($filter_data['size']) && !empty($filter_data['size'])){
				$size_list = "'" . implode("', '", $filter_data['size']) . "'";
				$sql .=" and size in (".$size_list.")"; 
			}
			
			if(isset($filter_data['weight']) && !empty($filter_data['weight'])){
				$weight_list = "'" . implode("', '", $filter_data['weight']) . "'";
				$sql .=" and weight in (".$weight_list.")"; 
			}
		}
		
		
		
	}

	$sql .=' order by  categories.sort asc,products.sort asc';  

	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $products[] = $row;
			  
        }
    }

    return $products;	
}	



function related_products($conn,$product_name){
	$related_products = [];
	$firstWord = strtok($product_name, ' '); // This gets the first word
	$common_name = substr($product_name, strlen($firstWord) + 1); // Remove the first word and space
	$sql = "select * from `products` where `product_name` like '%".$common_name."%' and status = '1' and product_name != '".$product_name."'";  
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) { 
		while ($row = $result->fetch_assoc()) { 
			$related_products[] = $row;
		}
	}
	return $related_products;
}




function get_new_arrival_products($conn,$limit) { 
    
	$products = [];
	
	$sql = 'select products.* from products join categories on categories.id = products.category_id where products.is_new_arrival = "1" and products.status ="1" order by products.id desc';
	
	if(!empty($limit)){
	  $sql .= ' limit 3;';
	}
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $products[] = $row;
			  
        }
    }

    return $products;	
}

function home_products($conn,$limit) { 
    
	$products = [];
	
	$sql = 'select products.* from products join categories on categories.id = products.category_id where  products.status = "1" and image != "" order by rand() limit '.$limit;
	
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $products[] = $row;
			  
        }
    }

    return $products;	
}






function product_size_filter($conn,$category_id) {
	
	
	
	if (is_array($category_id)) {
        $cats_id = $category_id;
	} elseif (is_string($category_id)) {
		$cats_id[] = $category_id;
	}else{
		$cats_id = [];
	}
	
	$cats_id_implode = implode(',',$cats_id);
	
	
	
	
	$products = [];
	
	$sql = 'select size from `products` where `category_id` IN  ('.$cats_id_implode.') and status = "1"  group by size ORDER BY CAST(SUBSTRING(size, 1, LENGTH(size) - 3) AS UNSIGNED) asc';

	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $products[] = $row['size'];
			  
        }
    }
    
    return $products;	
}	


function product_weight_filter($conn,$category_id) {
	
	
	
	
	if (is_array($category_id)) {
        $cats_id = $category_id;
	} elseif (is_string($category_id)) {
		$cats_id[] = $category_id;
	}else{
		$cats_id = [];
	}
	
	$cats_id_implode = implode(',',$cats_id);
	
	
	$products = [];
	
	
	$sql ="SELECT *
FROM products where weight != '' and `category_id` IN (".$cats_id_implode.") and status = '1'
ORDER BY CAST(SUBSTRING(weight, 1, LOCATE(' ±', weight) - 1) AS DECIMAL(10,2)) ASC;";
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $products[] = $row['weight'];
			  
        }
    }
    
    return $products;	
}	








function admin_access($conn,$module_id){ 
	if($_SESSION['admin_id'] != '1'){
		$sql = 'select * from `admin_roles` where `admin_id` = '.$_SESSION['admin_id'].' and `module_id` = '.$module_id;
		$admin_roles = getSingleRow($conn,$sql); 
		
		$view = $edit = $delete = 0;
		
		if(!empty($admin_roles)){
			
			if($admin_roles['view'] == 1){ $view = 1; }
			if($admin_roles['edit'] == 1){ $edit = 1; }
			if($admin_roles['delete'] == 1){ $delete = 1; }
				
			
		}
		
		
	}else{
		$view = $edit = $delete = 1;
	}
	
	return [
	     'view'=>$view,
	     'edit'=>$edit,
	     'delete'=>$delete
	];
	
}





	
function resizeImage($source_path, $destination_path, $new_width, $new_height) {
    // Get original image dimensions
    list($original_width, $original_height, $image_type) = getimagesize($source_path);

    // Create image resource from source
    switch ($image_type) {
        case IMAGETYPE_JPEG:
            $source_image = imagecreatefromjpeg($source_path);
            break;
        case IMAGETYPE_PNG:
            $source_image = imagecreatefrompng($source_path);
            break;
        case IMAGETYPE_GIF:
            $source_image = imagecreatefromgif($source_path);
            break;
        default:
            return false; // Unsupported image type
    }

    // Create a new true color image with the desired dimensions
    $resized_image = imagecreatetruecolor($new_width, $new_height);

    // Copy and resample the image
    imagecopyresampled($resized_image, $source_image, 0, 0, 0, 0, 
                       $new_width, $new_height, $original_width, $original_height);

    // Save the resized image
    switch ($image_type) {
        case IMAGETYPE_JPEG:
            imagejpeg($resized_image, $destination_path);
            break;
        case IMAGETYPE_PNG:
            imagepng($resized_image, $destination_path);
            break;
        case IMAGETYPE_GIF:
            imagegif($resized_image, $destination_path);
            break;
    }

    // Free up memory
    imagedestroy($source_image);
    imagedestroy($resized_image);

    return true;
}	
	
	
function get_category($conn,$id){
	
	
	
	
	
	$sql = 'select * FROM `categories` where `id` = '.$id ;
	$row = $conn->query($sql);
	if ($row->num_rows > 0) { 
	         
			 $category = mysqli_fetch_assoc($row);
	   
	         if($category['parent_id'] != '0'){
				 
				  //$sql1 = 'select * FROM `categories` where `id` = '.$category['parent_id'] ;
	              //$row2 = $conn->query($sql1);
				  //$main_cat = mysqli_fetch_assoc($row2);
				  
				  $parent_id = $category['parent_id'];
			 }else{
				  $parent_id = $category['id'];
			 }
			
	         $sub_categories = [];

             $sub_cat_sql = 'select * FROM `categories` where `parent_id` = '.$category['id'];
			
		     $sub_cat_sql .= ' and status  =1';
	         
			 $sub_cat_sql .= ' order by sort asc'; 
	
			 $sub_cat_result = $conn->query($sub_cat_sql); 

             if ($sub_cat_result->num_rows > 0) { 

				while ($sub_category_row = $sub_cat_result->fetch_assoc()) { 
                    
					
					   $sub2_categories = [];

						 $sub_cat2_sql = 'select * FROM `categories` where `parent_id` = '.$sub_category_row['id'];
						 
						 
						  $sub_cat2_sql .= ' and status  =1';
						
						 
						 $sub_cat2_sql .= ' order by sort asc'; 
				
						 $sub_cat2_result = $conn->query($sub_cat2_sql); 

						 if ($sub_cat2_result->num_rows > 0) { 

							while ($sub_cat2_row = $sub_cat2_result->fetch_assoc()) { 
								$sub2_categories[] = $sub_cat2_row;
							}

						 }
					
					$sub_category_row['sub_categories2'] = $sub2_categories;
					 
					 
					 
					 
					 
					 
					 
					 
					 $sub_categories[] = $sub_category_row;
				}

			 }
	   
	   
	        $category['sub_categories'] = $sub_categories;
	   
	   
	   $cats_id = [];
	   $cats_id[] = $category['id'];
	  
	   foreach($category['sub_categories'] as $cat){
		   $cats_id[] = $cat['id'];
		   foreach($cat['sub_categories2'] as $sub_cat){
			   $cats_id[] = $sub_cat['id'];
		   }
	   }
	   
	   
	   
	   
	   
	   return array(
		   'status'=>true,
		   'category'=>$category,
		   'cats_id'=>$cats_id,
	   );
	}else{
		 return array(
		   'status'=>false
	     );
	}
}



function get_product($conn,$id){
	$sql = 'select * FROM `products` where status ="1" and `id` = '.$id ;
	$row = $conn->query($sql);
	if ($row->num_rows > 0) { 
	         
	   $product = mysqli_fetch_assoc($row);
	   
	   
	   $product['related_products'] = related_products($conn,$product['product_name']);
	   	   
	   return array(
		   'status'=>true,
		   'product'=>$product,
	   );
	}else{
		 return array(
		   'status'=>false
	     );
	}
} 



function search_products($conn,$keyword){ 
    
	$products = [];
	
	$sql = "select products.*,'categories.category_name' FROM `products` join categories on categories.id = products.category_id where products.status ='1' and (products.product_name LIKE '%".$keyword."%' or products.size LIKE '%".$keyword."%' or categories.category_name LIKE '%".$keyword."%')"; 
	
	$row = $conn->query($sql);
	
	if ($row->num_rows > 0) { 
	         
	   while ($product_row = $row->fetch_assoc()) { 
			
			  $products[] = $product_row;
				  
			}
	   
	}
	return $products;
} 

function get_main_category($conn,$id){
	$sql = 'select * FROM `categories` where `id` = '.$id ;
	$row = $conn->query($sql);
	if ($row->num_rows > 0) { 
	         
	   return  mysqli_fetch_assoc($row); pd($product);
	   
	}else{
		
		return [];
	}
	   
}

function pd($data=[]){
	echo "<pre>"; print_r($data); exit;
}	
?>