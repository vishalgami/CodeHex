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

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'promo_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../admin/upload/user/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
		
		
		$sql = "UPDATE user SET `profile_pic`=? WHERE user_id=$id";
$q = $db->prepare($sql);
$q->execute(array($file_name_new));
						
if($q){
   header("location:profile.php?success=true");
        }else{
        header("location:profile.php?failed=error");
        } 
		}
		?>
	