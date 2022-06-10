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
$faculty_id = $_SESSION['SESS_USER_ID'];
$question = $_POST['question'];
$marks = $_POST['marks'];
$level = $_POST['label'];
$chapter_name = $_POST['chapter'];
$subject_name = $_POST['subject'];
$semester = $_POST['semester'];
$branch_id = $_POST['branch'];
$id = $_POST['id'];
	
$sql = "UPDATE question SET `subject_name`=?,`chapter_name`=?,`branch_id`=?,`semester`=?,`question`=?,`marks`=?,`level`=? WHERE question_id=$id";
$q = $db->prepare($sql);
$q->execute(array($subject_name,$chapter_name,$branch_id,$semester,$question,$marks,$level));
						
if($q){
   header("location:view_question.php?success=true");
        }else{
        header("location:view_question.php?failed=error");
        } 
		
		?>
	