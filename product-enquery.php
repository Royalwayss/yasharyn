<?php
include('admin/include/config.php');
$data = $_POST;
$err = '';

if(isset($data['name']) && $data['name'] != ''){
	$name = $data['name'];
}else{
	$name ='';
	$err = 1;
} 


if(isset($data['mobile']) && $data['mobile'] != ''){
	$mobile = $data['mobile'];
}else{
	$mobile ='';
	$err = 1;
} 

if(isset($data['email']) && $data['email'] != ''){
	if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
		$err = 1;
		$email  = '';
	 }else{
		 $email = $data['email'];
	 }
}else{
	$err = 1;
	$email  = '';
}

if(isset($data['product_id']) && $data['product_id'] != ''){
	$product_id = $data['product_id'];
}else{
	$product_id ='';
    $err = 1; 	
}


if(isset($data['message']) && $data['message'] != ''){
	$message = $data['message'];
}else{
	$message ='';
    $err = 1; 	
}




/*
if(!empty($_POST)){
		$recaptcha_secret = '';
		$recaptcha_response = $_POST['g-recaptcha-response'];

		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = [
			'secret' => $recaptcha_secret,
			'response' => $recaptcha_response
		];

		$options = [
			'http' => [
				'method' => 'POST',
				'content' => http_build_query($data)
			]
		];

		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		$json = json_decode($result);

		if ($json->success) {
		  
		} else { 
		  echo '<script>window.location.href="index.php"; </script>'; die;
		} 
   }
*/


if($err == ''){ 
           
		  
		 
		  $sql = 'select products.*,categories.category_name from products join categories on categories.id = products.category_id where products.id ="'.$product_id.'";';
	      $result = $conn->query($sql); 
		  $product = mysqli_fetch_assoc($result);
	     
	     
	         
		 
		 
		 
		 
		 
          
			$mail_message = "<html>
			   <head>
			   </head>
			   <body>
				  <table width='80%' border='0' cellpadding='3' cellspacing='3' style='border:#EFEFEF 5px solid; padding:5px;'>
					
					 <tr>
						<td  align='left' valign='middle'><h3><b> ".WEBSITENAME." </b></h3></td>
					 </tr>
					
					 <tr>
						<td class='style2'>Hi admin!  New product enquirie form has been recived from ".WEBSITENAME."</td>
					 </tr>
					 <tr>
						<td>&nbsp;</td>
					 </tr>
					 <tr>
						<td align='left' valign='middle'>
						   <table width='98%' border='0' align='right' cellpadding='5' cellspacing='5' style='background-color:#F5F5F5'>
							  <tr>
							   <td colspan='3' align='left' valign='top'><h3>Form Details<h3></td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Name</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$name."</td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Mobile</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$mobile."</td>
							  </tr>
							   
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Email</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$email."</td>
							  </tr>
							  
							 <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Product</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'><a target='block' href='product_details.php?id=".$product['id']."'>".$product['product_name']."</a></td>
							  </tr>
							  
							  
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Category Name</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'><a target='block' href='products.php?category_id=".$product['category_id']."'>".$product['category_name']."</a></td>
							  </tr>

							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Message</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$message."</td>
							  </tr>
							 
						   </table>
						</td>
					 </tr>
					
					 <tr>
						<td>&nbsp;</td>
					 </tr>
				  </table>
			   </body>
			</html>";
			
			
		    $sql = "INSERT INTO product_enquiries (product_id,name,email,mobile,message) VALUES ('".$product_id."','".$name."','".$email."', '".$mobile."','".$message."')";
						
			mysqli_query($conn,$sql); 
			$recipient = ADMIN_MAIL;
			

			$subject =  'Hi admin!  New product enquirie form has been recived from '.WEBSITENAME.' date -'.date('d-m-Y');
			$message = $mail_message;  
			
			$headers = "Content-Type: text/html; charset=UTF-8\r\n";
			$headers .= 'From: '.trim(WEBSITENAME). '<'.FROM_MAIL.'>'."\r\n";
			
			//$headers .= 'Cc: admin@yasharyn.com' . "\r\n"; 
            if($_SERVER['HTTP_HOST'] != 'localhost'){
				
			mail($recipient, $subject, $message, $headers);
			
		    }
			echo '<script>window.location.href="thanks.php"; </script>'; die;
}else{
			echo '<script>window.location.href="index.php"; </script>'; die;
}


?>