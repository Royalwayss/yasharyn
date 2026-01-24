<?php
include ('admin/include/config.php');
         $data = $_POST;
         $country = $data['country'];
         
		 if($data['action'] == '1'){
			 $html = get_state_options($conn,$country);
		 }else if($data['action'] == '2'){
			 $state = $data['state'];
			 $html = get_city_options($conn,$state);
		 }
		 
		 echo $html;

?>