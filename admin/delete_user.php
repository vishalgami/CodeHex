	
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

	$id=$_GET['id'];
	$a = 'yes';
$sql = "UPDATE user SET `delete_user`=? WHERE user_id=$id";
$q = $db->prepare($sql);
$q->execute(array($a));	
		
  if($q){
		   
		
	
      header("location:view_user.php?success=true");
        }else{
            header("location:view_user.php?failed=error");
        } 
		
		
		
		
		?>
	