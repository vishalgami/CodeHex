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

$semester = $_POST['semester'];



  //do your write to the database filename and other details   
$sql = "INSERT INTO semester (semester_name) VALUES (:semester)";
$q = $db->prepare($sql);
$q->execute(array(':semester'=>$semester));
if($q){
	
	
    
      header("location:view_semester.php?success=true");
        }else{
            header("location:view_semester.php?failed=true");
        } 
		
		?>
	