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
$id = $_SESSION['SESS_USER_ID'];
$a = $_POST['select_customer'];
$b = $_POST['Select_trip'];
$c = $_POST['notes'];
$d = 'Active';


$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'promo_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../manager/upload/document/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO document_for_customer (customer_id,trip_id,notes,status,post_by,file) VALUES (:a,:b,:c,:d,:id,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':id'=>$id,':g'=>$file_name_new));
if($q){
      header("location:view_doc_list.php?success=true");
        }else{
            header("location:view_doc_list.php?failed=true");
        } 
		}
		?>
	