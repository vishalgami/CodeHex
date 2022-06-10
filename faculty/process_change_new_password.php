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
$a = $_POST['new_password'];
$b = '2';	
$sql = "UPDATE user SET `password`=?,`status`=? WHERE user_id=$id";
$q = $db->prepare($sql);
$q->execute(array($a,$b));
						
if($q){
   header("location:index.php?success=true");
        }else{
        header("location:passwordchange.php?failed=error");
        } 
		
		?>
	