<?php
/**................................................................
 * @package Travel
 * www.codevety.com
 * Codevety Technology       
 * (conact@codevety.com)
 * ................................................................
Start session
*/
session_start();
include('include/connect.php');
$id= $_SESSION['SESS_ADMIN_ID'];
$a = $_POST['username'];
$b = $_POST['full_name'];
$c = $_POST['email'];


		
		
$sql = "UPDATE user SET `username`=?,`full_name`=?,`mail_id`=? WHERE user_id=$id";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c));
						
if($q){
   header("location:profile.php?success=true");
        }else{
        header("location:profile.php?failed=error");
        } 
		
		?>
	
	