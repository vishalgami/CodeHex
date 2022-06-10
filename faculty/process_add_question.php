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


  //do your write to the database filename and other details   
$sql = "INSERT INTO question (subject_name,chapter_name,branch_id,semester,question,marks,level,faculty_id) VALUES (:subject_name,:chapter_name,:branch_id,:semester,:question,:marks,:level,:faculty_id)";
$q = $db->prepare($sql);
$q->execute(array(':subject_name'=>$subject_name,':chapter_name'=>$chapter_name,':branch_id'=>$branch_id,':semester'=>$semester,':question'=>$question,':marks'=>$marks,':level'=>$level,':faculty_id'=>$faculty_id));
if($q){
	
	
    
      header("location:view_question.php?success=true");
        }else{
            header("location:view_question.php?failed=true");
        } 
		
		?>
	