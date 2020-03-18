<?php 
	// var_dump($_POST);
	// exit();
 	 $fname = $_POST["r_f_name"];
 	 $number = $_POST["r_n_name"];

     $email = $_POST["r_e_name"];
     $message = $_POST["text-box"];
	 


	$subject =" Injury Live " . $fname;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Appointment Form: <' . $emailid .">" ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>First Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $fname ."</td>
	                 </tr>

	   			  	<tr>
	                   <td align='left' width='35%'><strong>Phone number :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $number ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>E-mail Address :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $email ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>messages :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $message ."</td>
	                 </tr>

	   			  	
	                 
	               </table>";  
	              
	  	  if(mail("roxanetlowry@gmail.com", $subject, $message, $headers))
			  //if(mail("roxanetlowry@gmail.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
		}
		else{
			echo "error";
		}

		
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>