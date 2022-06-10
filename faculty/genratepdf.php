<?php
require_once("include/config.php");
session_start();
//

if(isset($_POST["branch"]))  
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



require('pdf/tcpdf.php');
$pdf = new TCPDF();
$pdf->AddPage();

$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $pdf->SetCreator(PDF_CREATOR);  
      $pdf->SetTitle("Marwadi University Question PAPER");  
      $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $pdf->SetDefaultMonospacedFont('helvetica');  
      $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $pdf->setPrintHeader(false);  
      $pdf->setPrintFooter(false);  
      $pdf->SetAutoPageBreak(TRUE, 10);  
      $pdf->SetFont('helvetica', '', 11);  
      $pdf->AddPage();
	
	
	
	//  $obj_pdf->SetFillColor(193,229,252);
	 // $width_cell=array(20,50,40,40,40);
	 // $obj_pdf->Cell($width_cell[0],10,'question',1,0,true);
      $content = '';  
      $content .= '  
      <h4 align="center"><img src="../admin/assets/images/mu-logo.png" alt="" class="ico-img"></h4><br />
	  
	  <table>  
	  
           <tr>  
                 
               <th width="70%"> Subject Name: Computer Science(CSE) </th>                   
               <th width="30%">Total Marks : 100 Marks </th> 
			   
           </tr>
		   
     </table><br>
	 <table>  
	  
           <tr>  
                 
               <th width="70%">Semester Name : III SEM </th>                   
               <th width="30%">Total Hours : 2 hr</th> 
			   
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
	  
//code for print data

   $pdf->writeHTML($content);

   $sql = "SELECT question,marks FROM question WHERE branch_id = $branch AND subject_name = $subject AND semester = $semester AND level = $question_level limit $total_marks_count";
     $query = $dbh -> prepare($sql);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
    {

      foreach($results as $row) 
	 {
	  $pdf->SetFont('helvetica','',12);	
	  $pdf->Ln();
	  foreach($row as $column)
	  
	  $pdf->Cell(91,8,$column,1);
     }
   }
$pdf->Output();

 }
?>