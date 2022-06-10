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

	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM student_master WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:view_student.php?success=true");
        }else{
            header("location:view_student.php?failed=error");
        } 
		?>
	