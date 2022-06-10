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

	$id=$_GET['del_branch'];
	$result = $db->prepare("DELETE FROM branch WHERE branch_id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:view_branch.php?success=true");
        }else{
            header("location:view_branch.php?failed=error");
        } 
		?>
	