<?php
	if ( isset( $_POST['submit'] ) && !empty( $_POST['email'] ) ) {
		if( isset( $_POST['check'] ) ) { // honey pot check
			echo "Sorry! Try Again";
		} else {  
		//Sanitize the POST values
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
        $to = "info@armanipharma.com";

		$subject = "Contact @ Armani Smiley Pharmacy";
		$message = '<br/>
	      <table width="100%" border="0" cellspacing="2" cellpadding="5" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333">
	        <tr>
	          <td colspan="2" bgcolor="#EAEFF4"><strong> New Message!!!</strong> </td>
	        </tr>
	        <tr>
	          <td bgcolor="#EAEFF4">Name</td>
	          <td bgcolor="#EAEFF4">'.$name.'</td>
	        </tr>
	        <tr>
	          <td bgcolor="#EAEFF4"> Email </td>
	          <td bgcolor="#EAEFF4">'.$email.'</td>
	        </tr>
	        <tr>
	          <td bgcolor="#EAEFF4">Phone No.</td>
	          <td bgcolor="#EAEFF4">'.$phone.'</td>
	        </tr>
	        <tr>
	          <td bgcolor="#EAEFF4">Message</td>
	          <td bgcolor="#EAEFF4">'.$message.'</td>
	        </tr>
	      </table> ';

	    $headers = "From:$email\n";
	    $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);
        echo "<script>alert('Your message has been sent successfully!!!'); window.location = './contact.html';</script>";
		}
	}
	else {
		echo "<script>alert('Invalid Details..!!!'); window.location = './contact.html';</script>";
	}
?>