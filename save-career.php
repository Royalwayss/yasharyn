<?php
include('admin/include/config.php');
$data = $_POST;
$err = '';

if(isset($data['username']) && $data['username'] != ''){
	$name = $data['username'];
}else{
	$name ='';
	$err = 1;
} 


if(isset($data['phone']) && $data['phone'] != ''){
	$phone = $data['phone'];
}else{
	$phone ='';
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

if(isset($data['subject']) && $data['subject'] != ''){
	$subject = $data['subject'];
}else{
	$subject ='';
    $err = 1; 	
}


if(isset($data['message']) && $data['message'] != ''){
	$message = $data['message'];
}else{
	$message ='';
    $err = 1; 	
}



 

if(!empty($_POST)){
		
		
		if($_SERVER['HTTP_HOST'] != 'localhost'){
				$recaptcha_secret = RECAPTCHA_SECRET_KEY;
				$recaptcha_response = $_POST['g-recaptcha-response'];

				$url = 'https://www.google.com/recaptcha/api/siteverify';
				$rc_data = [
					'secret' => $recaptcha_secret,
					'response' => $recaptcha_response
				];

				$options = [
					'http' => [
						'method' => 'POST',
						'content' => http_build_query($rc_data)
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
   }



if($err == ''){ 
           
		  
		 
          
			$mail_message = "<html>
			   <head>
			   </head>
			   <body>
				  <table width='80%' border='0' cellpadding='3' cellspacing='3' style='border:#EFEFEF 5px solid; padding:5px;'>
					
					 <tr>
						<td  align='left' valign='middle'><h3><b> ".WEBSITENAME." </b></h3></td>
					 </tr>
					
					 <tr>
						<td class='style2'>Hi admin!  New contact form has been recived from ".WEBSITENAME."</td>
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
								 <td width='30%' align='left' valign='top' class='style2'>Phone</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$phone."</td>
							  </tr>
							   
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Email</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$email."</td>
							  </tr>
							  
							 <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Subject</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$subject."</td>
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
			
			
			echo $mail_message; exit;
			
		    $sql = "INSERT INTO contacts (form_type,name,email,mobile,subject,message) VALUES ('".$form_type."','".$name."','".$email."', '".$phone."','".$subject."','".$message."')";
						
			mysqli_query($conn,$sql); 
			$recipient = ADMIN_MAIL;
			

			$subject =  'Hi admin!  New contact form has been recived from '.WEBSITENAME.' date -'.date('d-m-Y');
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