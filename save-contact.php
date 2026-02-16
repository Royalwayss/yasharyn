<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




include('admin/include/config.php');
$data = $_POST; 
$err = '';

if(isset($data['name']) && $data['name'] != ''){
	$name = $data['name'];
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

if(isset($data['country_code']) && $data['country_code'] != ''){
	$country_code = $data['country_code'];
}else{
	$country_code ='';
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





if(isset($data['country']) && $data['country'] != ''){
	$country = $data['country'];
}else{
	$country ='';
}


if(isset($data['state']) && $data['state'] != ''){
	$state = $data['state'];
}else{
	$state ='';
}


if(isset($data['city']) && $data['city'] != ''){
	$city = $data['city'];
}else{
	$city ='';
}



if(isset($data['message']) && $data['message'] != ''){
	$message = $data['message'];
}else{
	$message ='';
    $err = 1; 	
}

if(isset($_GET['form_type'])){
	$form_type = 'home';
}else{
	$form_type = 'contact';
}	


if($_SERVER['HTTP_HOST'] != 'localhost'){
if(!empty($_POST)){
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
								 <td width='65%' align='left' valign='top' class='style3'>".$country_code.' '.$phone."</td>
							  </tr>
							   
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Email</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$email."</td>
							  </tr>
							  
							  
							  
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Country</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$country."</td>
							  </tr>
							  
							  
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>State</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$state."</td>
							  </tr>
							  
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>City</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$city."</td>
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
			
			
		    $sql = "INSERT INTO contacts (form_type,name,email,country_code,mobile,country,state,city,subject,message) VALUES ('".$form_type."','".$name."','".$email."', '".$country_code."','".$phone."','".$country."','".$state."','".$city."','".$subject."','".$message."')";
						
			mysqli_query($conn,$sql); 
			
			

			
			/*$message = $mail_message;  
			$recipient = ADMIN_MAIL;
			$headers = "Content-Type: text/html; charset=UTF-8\r\n";
			$headers .= 'From: '.trim(WEBSITENAME). '<'.FROM_MAIL.'>'."\r\n";
			$headers .= 'Bcc: ' . ADMIN_MAIL_BCC . "\r\n";
			if($_SERVER['HTTP_HOST'] != 'localhost'){
				
			  mail($recipient, $subject, $message, $headers); 
			  
		    } */
			
			$subject =  'Hi admin!  New contact form has been recived from '.WEBSITENAME.' date -'.date('d-m-Y');
			require 'vendor/autoload.php';

            $to_addresses = array('info@yasharyn.com','yashik@yasharyn.com','aaryans@yasharyn.com','yashik.yasharyn@gmail.com','jainsohum.aaryan@gmail.com');
            $cc_addresses = array('manjit@rtpltech.com');
			
			try {
				
			    require 'vendor/autoload.php';
			    $mail = new PHPMailer(true);
				$mail->isMail();
				$mail->setFrom("info@yasharyn.com", "yasharyn");
				foreach ($to_addresses as $to_address) {
                  $mail->addAddress($to_address);
                }
				
				foreach ($cc_addresses as $cc_address) {
                  $mail->addCC($cc_address);
                }

				

				$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body    = $mail_message;
				$mail->send();
				
			} catch (Exception $e) {
				
			}
			
			
			
			
			
			
			
			
			
			
			
			

			
		   
			echo '<script>window.location.href="thanks.php"; </script>'; die;
}else{
			echo '<script>window.location.href="index.php"; </script>'; die;
}


?>