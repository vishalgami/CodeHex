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
include('../admin/include/connect.php');
$id= $_SESSION['SESS_USER_ID'];
$a = $_POST['username'];
$b = $_POST['full_name'];
$c = $_POST['email'];
$d = $_POST['mobile_no'];
		
$sql = "UPDATE user SET `full_name`=?,`mail_id`=?,`mobile_no`=? WHERE user_id=$id";
$q = $db->prepare($sql);
$q->execute(array($b,$c,$d));
						
if($q){
   header("location:profile.php?success=true");
        }else{
        header("location:profile.php?failed=error");
        } 
		
		?>
	
	