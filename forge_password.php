<?php

/**................................................................
 * @package Travel
 * www.codevety.com
 * Codevety Technology       
 * (conact@codevety.com)
 * ................................................................
 */

include 'admin/include/connect.php';

function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
$login = clean($_POST['email']);
	
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	
	
	
	
	
	
	//If there are input validations, redirect back to the login form
	
	
	//Create query
	$qry="SELECT * FROM user WHERE mail_id='$login'";
	$result=mysql_query($qry,$conn);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			
			$member = mysql_fetch_assoc($result);
			
			$id = $member['id'];
			$username = $member['username'];
			$full_name = $member['full_name'];
			$mail_id = $member['mail_id'];
			$password = $member['password'];
			
			$body = "<p>
	        UserName :&nbsp; ".$username."<br> 
    		Full Name :&nbsp; ".$full_name."<br>
    		Email :&nbsp; ".$mail_id."<br>
    		Password :&nbsp; ".$password." <br>
    		
    		Warning !!!  <br>
    		Do Not Share Your password With Anyone. <br>
    		Thanks <br>
    		IVY Aspire
    		</p>";
			
		require_once "mail/PHPMailerAutoload.php"; //PHPMailer Object 
$mail = new PHPMailer; //From email address and name 
$mail->From = "amit6368@gmail.com"; 
$mail->FromName = " Password Recovery From IVY Aspire admin"; //To address and name 
$mail->addAddress($mail_id, $full_name);//Recipient name is optional
$mail->addAddress("contactnodestream@gmail.com"); //Address to which recipient will reply 
$mail->addReplyTo("contactnodestream@gmail.com", "Reply"); //CC and BCC 
//$mail->addCC("amitpatelscc1@gmail.com"); 
//$mail->addBCC("amitpatelscc2@gmail.com"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = "Welcome To IVY Aspire Your  Login Password Detail Below "; 
$mail->Body = $body;
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}
if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else 
{ 
echo "Message has been sent to Register Email successfully"; 

}
			
			
			
				
				header("location: sucess-password-reset.php");
			
				
			exit();
		}else {
			
  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'"; 
  echo "alert('Something went wrong, Enter correct Email details');window.location.href='forgot_password.php'";
   echo '</script>';
    exit;
   // echo "<script language = 'javascript'> alert('Wrong Details');'</script>";
                       
                       
                    }
	}else {
		die("Query failed");
	}
?>




 



		
		
		?>
	