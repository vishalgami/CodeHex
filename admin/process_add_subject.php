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

$subject = $_POST['subject'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$subject_code = $_POST['subject_code'];  

  //do your write to the database filename and other details   
$sql = "INSERT INTO subject (subject_name,subject_code,branch_id,semester_id) VALUES (:subject,:subject_code,:branch,:semester)";
$q = $db->prepare($sql);
$q->execute(array(':subject'=>$subject,':subject_code'=>$subject_code,':branch'=>$branch,':semester'=>$semester));
if($q){
	
	
    
      header("location:view_subject.php?success=true");
        }else{
            header("location:view_subject.php?failed=true");
        } 
		
		?>
	