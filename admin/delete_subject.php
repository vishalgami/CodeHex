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

	$id=$_GET['del_subject'];
	$result = $db->prepare("DELETE FROM subject WHERE subject_id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:view_subject.php?success=true");
        }else{
            header("location:view_subject.php?failed=error");
        } 
		?>
	