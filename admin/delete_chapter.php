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

	$del_chapter=$_GET['del_chapter'];
	$result = $db->prepare("DELETE FROM chapter WHERE chapter_id= :del_chapter");
	$result->bindParam(':del_chapter', $del_chapter);
       if($result->execute()){
      header("location:view_chapter.php?success=true");
        }else{
            header("location:view_chapter.php?failed=error");
        } 
		?>
	