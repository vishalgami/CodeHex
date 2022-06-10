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
$id= $_POST['id'];
$chapter = $_POST['chapter'];
$subject = $_POST['subject'];

		
		$sql = "UPDATE chapter SET `chapter_name`=?,`subject_id`=? WHERE chapter_id = '$id' ";
$q = $db->prepare($sql);
$q->execute(array($chapter,$subject));
						
if($q){
   header("location:view_chapter.php?success=true");
        }else{
        header("location:view_chapter.php?failed=error");
        } 
		
		?>
	