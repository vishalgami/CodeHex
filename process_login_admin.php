<?php 
include 'admin/include/connect.php';
session_start();

// function clean($str) {
// 		$str = @trim($str);
// 		if(get_magic_quotes_gpc()) {
// 			$str = stripslashes($str);
// 		}
// 		return mysql_real_escape_string($str);
// 	}
	
	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['password'];
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	
	
	//Create query
	$qry="SELECT * FROM user WHERE mail_id='$login' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful				
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			
			$a = $member['member'];
			$b = 'admin';
			$c = 'faculty';
			$username = $member['username'];
			$full_name = $member['full_name'];
			$email_id = $member['mail_id'];
			$profile_pic = $member['profile_pic'];
			$id = $member['user_id'];
			
			if($a==$b) { 
			
			
			$_SESSION['SESS_ADMIN_ID'] = $id;
			$_SESSION['SESS_ADMIN_USER_NAME'] = $username;
			$_SESSION['SESS_ADMIN_FULL_NAME'] = $full_name;
			$_SESSION['SESS_ADMIN_EMAIL_NAME'] = $email_id;
			$_SESSION['SESS_ADMIN_PRO_PIC'] = $profile_pic;
			session_write_close();
			header("location: admin/index.php");
			exit();
			
			}else if($a==$c){ 
			
			$_SESSION['SESS_USER_ID'] = $id;
			$_SESSION['SESS_USER_NAME'] = $username;
			$_SESSION['SESS_USER_FUll_NAME'] = $full_name;
			$_SESSION['SESS_USER_EMAIL'] = $email_id;
			$_SESSION['SESS_USER_PRO_PIC'] = $profile_pic;
			session_write_close();
			$d = $member['status'];
			$e = '2';
			 if($d==$e) { 
			header("location: faculty/index.php");
			}else{
				
				header("location: faculty/passwordchange.php");
				
			}
				
			exit();
			}
		}else {
			
  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'"; 
  echo "alert('Something went wrong, Enter correct details');window.location.href='login.php'";
   echo '</script>';
    exit;
   // echo "<script language = 'javascript'> alert('Wrong Details');'</script>";
                       
                       
                    }
	}else {
		die("Query failed");
	}
?>




