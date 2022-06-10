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

$chapter = $_POST['chapter'];
$subject = $_POST['subject'];



  //do your write to the database filename and other details   
$sql = "INSERT INTO chapter (chapter_name,subject_id) VALUES (:chapter,:subject)";
$q = $db->prepare($sql);
$q->execute(array(':chapter'=>$chapter,':subject'=>$subject));
if($q){
	
	
    
      header("location:view_chapter.php?success=true");
        }else{
            header("location:view_chapter.php?failed=true");
        } 
		
		?>
	