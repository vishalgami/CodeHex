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

$a = $_POST['new_password'];
		
$sql = "UPDATE user SET `password`=? WHERE user_id=$id";
$q = $db->prepare($sql);
$q->execute(array($a));
						
if($q){
   header("location:profile.php?success=true");
        }else{
        header("location:profile.php?failed=error");
        } 
		
		?>
	