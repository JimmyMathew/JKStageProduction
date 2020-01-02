<?php

// Replace this with your own email address
$siteOwnersEmail = 'info@jkstageproduction.com';
$to = 'sakthi.torque@gmail.com,sarah.torque@gmail.com';


if($_POST) {

   $name = trim(stripslashes($_POST['fullName']));
   $email = trim(stripslashes($_POST['email']));
   $mobile = trim(stripslashes($_POST['mobile']));
   $subject = trim(stripslashes($_POST['subject']));
   $message = trim(stripslashes($_POST['message']));

   // Check Subject
	if ($subject == '') { $subject = "REG:JK Stage Production - Enquiry"; }


   // Set Message
   $mailMessage .= "<div class='col-md-8 col-xs-7 jklogo'>
   <img src='https://jkstageproduction.com/images/logo/mail_logo.png'>
				</div>
				<b>Enquiry Form ,</b><br>
				<table>
				<tr>
				<td>Name:</td>
				<td>$name</td>
				</tr>
				<tr>
				<td>Email:</td>
				<td>$email</td>
				</tr>
				<tr>
				<td>Phone:</td>
				<td>$mobile</td>
				</tr>
				<tr>
				<td>Message:</td>
				<td>$message</td>
				</tr>
				<tr>
				<td><p> This email was sent from your site's contact form. <br /></p></td>
				</tr>
				</table>";

   // Set From: header
   $from =  $siteOwnersEmail;

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$header .= "Cc: \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



  

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($to, $subject, $mailMessage, $headers);

	if ($mail) 
		{ 
			echo '<script language="javascript" type="text/javascript"> 
			alert("Thank you. We will contact you soon.");
			window.location = "contact.php";
				</script>';
		}
	  else 
		{ 
		echo '<script language="javascript" type="text/javascript"> 
		alert("Something went wrong. Please try again.");
		window.location = "contact.php";
			</script>';
		}
		


	// else {

	// 	$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
	// 	$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
	// 	$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
	// 	echo '<script language="javascript" type="text/javascript"> 
	// 	alert("Mail Error. Please try again later.");
	// 		</script>';

	// } # end if - there was a validation error

}

?>