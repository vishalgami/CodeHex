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

$branch = $_POST['branch'];



  //do your write to the database filename and other details   
$sql = "INSERT INTO branch (branch_name) VALUES (:branch)";
$q = $db->prepare($sql);
$q->execute(array(':branch'=>$branch));
if($q){
	
	
    
      header("location:view_branch.php?success=true");
        }else{
            header("location:view_branch.php?failed=true");
        } 
		
		?>
	