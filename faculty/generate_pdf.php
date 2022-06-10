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



	//end 	=======================================================================================
	
	
if(isset($_POST["submit"]))  
 {  

$faculty_id = $_SESSION['SESS_USER_ID'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$subject = $_POST['subject'];
$question_level = $_POST['question_level'];
$marks_type = $_POST['marks_type'];
$total_marks = $_POST['total_marks'];
$total_hours = $_POST['total_hours'];

$total_marks_count = $total_marks / $marks_type ;

 


      require_once('pdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Marwadi University Question PAPER");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();
	 
	//  $obj_pdf->SetFillColor(193,229,252);
	 // $width_cell=array(20,50,40,40,40);
	 // $obj_pdf->Cell($width_cell[0],10,'question',1,0,true);
      $content = '';  
      $content .= '  
      <h4 align="center"><img src="../admin/assets/images/mu-logo.png" alt="" class="ico-img"></h4><br />
	  
	  <table>  
	  
           <tr>  
                 
               <th width="70%"> Subject Name: </th>                   
               <th width="30%">Total Marks : </th> 
			   
           </tr>
		   
     </table><br>
	 <table>  
	  
           <tr>  
                 
               <th width="70%"> Semester : </th>                   
               <th width="30%">Total Hours : </th> 
			   
           </tr>
		   
     </table><br><br>
	  
	  
	  
	  
      <table border="1" cellspacing="0" cellpadding="3">  
	  
           <tr>  
                <th width="8%" align="center">S.No.</th>  
                <th width="80%" align="center">Question</th>  
                  
                <th width="12%" align="center">Marks</th>  
           </tr>  
      ';  
     // $content .= mysql_fetch_assoc($result);  
      $content .= '</table>'; 
	  $result = $db->prepare("SELECT question,marks FROM question WHERE branch_id = $branch AND subject_name = $subject AND semester = $semester AND level = $question_level limit $total_marks_count");
    $result->execute();
    for($i=1; $result->fetch(); $i++){
foreach($result as $row) {
$obj_pdf->Ln();
foreach($row as $column)
$obj_pdf->Cell(46,12,$column,1);
} }		
	  
    
	  
      $obj_pdf->writeHTML($content);
	  
    //  $obj_pdf->Output('Marwadi University.pdf', 'I'); 
      $obj_pdf->Output();	  
 }  






























		
		
		?>
	