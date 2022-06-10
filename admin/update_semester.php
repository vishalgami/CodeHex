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
$semester = $_POST['semester'];

		
		$sql = "UPDATE semester SET `semester_name`=? WHERE semester_id = '$id' ";
$q = $db->prepare($sql);
$q->execute(array($semester));
						
if($q){
   header("location:view_semester.php?success=true");
        }else{
        header("location:view_semester.php?failed=error");
        } 
		
		?>
	