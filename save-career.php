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


if(isset($data['country_code']) && $data['country_code'] != ''){
	$country_code = $data['country_code'];
}else{
	$country_code ='';
	$err = 1;
} 


if(isset($data['mobile']) && $data['mobile'] != ''){
	$mobile = $data['mobile'];
}else{
	$mobile ='';
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
		
		/*
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
		} */
   }



if($err == ''){ 
           
		  
		  $resume_file = '';
           $resume_file_path = '';
           if(!empty($_FILES["resume"]["name"])){
				$target_dir = "assets/uploads/resume/";
				$target_file = $target_dir . basename($_FILES["resume"]["name"]);
				$uploadOk = 1;
				$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			   
			   if($FileType == 'docx' || $FileType == 'doc' || $FileType == 'pdf'){
				   $fileame = 'resume-'.time().''.rand(10,100).'-'.$FileType;
				   $file_path = $target_dir.''.$fileame; 
				   $tmp_name = $_FILES["resume"]["tmp_name"];
				   if ( move_uploaded_file($tmp_name, $file_path)) {
					  $resume_file_path =BASE_URL.$file_path;
					   $resume_file =  $fileame;
				   }
				   
			   }
           }
         
			$mail_message = "<html>
			   <head>
			   </head>
			   <body>
				  <table width='80%' border='0' cellpadding='3' cellspacing='3' style='border:#EFEFEF 5px solid; padding:5px;'>
					
					 <tr>
						<td  align='left' valign='middle'><h3><b> ".WEBSITENAME." </b></h3></td>
					 </tr>
					
					 <tr>
						<td class='style2'>Hi admin!  New career form has been recived from ".WEBSITENAME."</td>
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
								 <td width='65%' align='left' valign='top' class='style3'>".$country_code.' '.$mobile."</td>
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
								 <td width='30%' align='left' valign='top' class='style2'>Join Type</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$data['join_type']."</td>
							  </tr>
							  
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Category</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$data['category']."</td>
							  </tr>
							  
							  
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Experience</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$data['experience']."</td>
							  </tr>
							  
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Skills</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".implode('<br>',$data['skills'])."</td>
							  </tr>

							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Message</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$message."</td>
							  </tr>";
							  
							  if(!empty($resume_file)){
								  
								    $mail_message .= "<tr>
									 <td width='30%' align='left' valign='top' class='style2'>Resume</td>
									 <td width='5%' align='left' valign='top' class='style2'>:</td>
									 <td width='65%' align='left' valign='top' class='style3'><a target='_block' href='".$resume_file_path."'>$resume_file</a></td>
									</tr>";
								  
								  
							  }
							  
							 
						    $mail_message .= "</table>
						</td>
					 </tr>
					
					 <tr>
						<td>&nbsp;</td>
					 </tr>
				  </table>
			   </body>
			</html>";
			
			
			$skills = implode(',',$data['skills']); 
			
		    $sql = "INSERT INTO careers (name,email,country_code,mobile,country,state,city,subject,join_type,skills,resume,category,experience,message) VALUES ('".$name."','".$email."','".$country_code."','".$mobile."','".$country."','".$state."','".$city."','".$subject."','".$data['join_type']."','".$skills."','".$resume_file."','".$data['category']."', '".$data['experience']."','".$message."')";
					
			mysqli_query($conn,$sql); 
			$recipient = ADMIN_MAIL;
			
			
            /*
			$subject =  'Hi admin!  New career form has been recived from '.WEBSITENAME.' date -'.date('d-m-Y');
			$message = $mail_message;  
			
			$headers = "Content-Type: text/html; charset=UTF-8\r\n";
			$headers .= 'From: '.trim(WEBSITENAME). '<'.FROM_MAIL.'>'."\r\n";
			
            $headers .= 'Bcc: ' . ADMIN_MAIL_BCC . "\r\n";


			if($_SERVER['HTTP_HOST'] != 'localhost'){
				
			  mail($recipient, $subject, $message, $headers); 
			  
		    }  */
			
			
			
			require 'vendor/autoload.php';
            $subject =  'Hi admin!  New career form has been recived from '.WEBSITENAME.' date -'.date('d-m-Y'); 
            $to_addresses = array('info@yasharyn.com','yashik@yasharyn.com','aaryans@yasharyn.com','yashik.yasharyn@gmail.com');
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
				
				if(!empty($resume_file)){
				$mail->addAttachment("assets/uploads/resume/".$resume_file);
                }
				
				
				$mail->send();
				
			} catch (Exception $e) {
				
			}
			
			
			
			
			
			
			
			
		   
			echo '<script>window.location.href="thanks.php"; </script>'; die;
}else{
			echo '<script>window.location.href="index.php"; </script>'; die;
}


?>