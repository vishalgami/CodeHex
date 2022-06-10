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

$username = $_POST['username'];
$full_name = $_POST['full_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
//$file_name_new = 'profile_pic2.png';
$status = '1';
$member = 'faculty';
$subject = $_POST['subject'];
$branch = $_POST['branch'];

    		
    
$file_name  = strtolower($_FILES['file']['name']);
if($file_name == '') {
		
	$file_name_new = 'profile_pic2.png';
	
	//do your write to the database filename and other details   
        $sql = "INSERT INTO user (username,full_name,password,mail_id,mobile_no,profile_pic,status,member,branch,subject) VALUES (:username,:full_name,:password,:email,:mobile_no,:file_name_new,:status,:member,:branch,:subject)";
$q = $db->prepare($sql);
$q->execute(array(':username'=>$username,':full_name'=>$full_name,':password'=>$password,':email'=>$email,':mobile_no'=>$mobile_no,':file_name_new'=>$file_name_new,':status'=>$status,':member'=>$member,':branch'=>$branch,':subject'=>$subject));
if($q){
	
	
//echo $e ;  
   header("location:view_faculty.php?success=true");
        }else{
            header("location:view_faculty.php?failed=true");
        } 
		  
		
		
	}else{
	    
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'promo_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'upload/user/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {   
	    
	    



  //do your write to the database filename and other details   
$sql = "INSERT INTO user (username,full_name,password,mail_id,mobile_no,profile_pic,status,member,branch,subject) VALUES (:a,:b,:c,:d,:e,:file_name_new,:f,:g,:h,:i,:j)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':file_name_new'=>$file_name_new,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i));
if($q){
	
	
//echo $e ;  
   header("location:view_faculty.php?success=true");
        }else{
            header("location:view_faculty.php?failed=true");
        } 
		  } 

}

		
		
		?>
	