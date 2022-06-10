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
$branch = $_POST['branch'];

		
		$sql = "UPDATE branch SET `branch_name`=? WHERE branch_id = '$id' ";
$q = $db->prepare($sql);
$q->execute(array($branch));
						
if($q){
   header("location:view_branch.php?success=true");
        }else{
        header("location:view_branch.php?failed=error");
        } 
		
		?>
	