<?php
session_start();
 include('include/config.php');
 
 
 $data = $_POST;  
 
 if(!empty($data['subadmin_id']) && $data['subadmin_id'] != ''){
	    $subadmin_id = $data['subadmin_id'];
		
		$delete_sql = 'delete from admin_roles where admin_id = '.$subadmin_id;
		$conn->query($delete_sql);
		
        $date = date('Y-m-d H:i:s');
        
		$sql = 'select * from `modules` order by `sort` asc';
	    $result = $conn->query($sql); 
		if ($result->num_rows > 0) { 			
			while ($row = $result->fetch_assoc()) { 			
				$module_id = $row['id'];
				$view = $edit = $delete = 0;
				if(isset($data['module'.$module_id]) && !empty($data['module'.$module_id])){
					
					$module_role = $data['module'.$module_id];
					
					if(isset($module_role['view']) && $module_role['view'] == 1){
						$view = 1;
					}
					if(isset($module_role['edit']) && $module_role['edit'] == 1){
						$edit = 1;
					}
					
					if(isset($module_role['delete']) && $module_role['delete'] == 1){
						$delete = 1;
					}
					
				}
				
				
				$sql = "INSERT INTO `admin_roles` (`admin_id`, `module_id`,`view`, `edit`, `delete`,`created_at`) VALUES ('$subadmin_id','$module_id','$view','$edit','$delete','$date');";
				$conn->query($sql);  
			}
		}		
					
						
		
		
		$message = 'Subadmin role has been updated successfully';
	
	
	
	 $_SESSION['success_message'] = $message;
	echo "<script>window.location.href='subadmins.php';</script>";
 }else{
	 echo "<script>window.location.href='subadmins.php';</script>";
 }
 
 
 
 
 
?>