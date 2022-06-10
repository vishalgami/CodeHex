<?php
require_once("config.php");
//




require('tcpdf.php');
$pdf = new TCPDF();
$pdf->AddPage();


//code for print data
$sql = "SELECT EmpName from  tblemployee ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{

foreach($results as $row) {
	$pdf->SetFont('helvetica','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(46,12,$column,1);
} }
$pdf->Output();
?>