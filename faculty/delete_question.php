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
include "../admin/include/connect.php";

	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM question WHERE question_id= :id");
	$result->bindParam(':id', $id);
       if($result->execute()){
      header("location:view_question.php?success=true");
        }else{
            header("location:view_question.php?failed=error");
        } 
		?>
	