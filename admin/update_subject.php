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
$subject = $_POST['subject'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$subject_code = $_POST['subject_code'];  

		
		$sql = "UPDATE subject SET `subject_name`=?,`subject_code`=?,`subject_code`=?,`semester_id`=? WHERE subject_id = '$id' ";
$q = $db->prepare($sql);
$q->execute(array($subject,$subject_code,$branch,$semester));
						
if($q){
   header("location:view_subject.php?success=true");
        }else{
        header("location:view_subject.php?failed=error");
        } 
		
		?>
	