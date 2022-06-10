<?php include "include/header.php";


?>

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="invoice-box" id="printTable">
					<table id="printTable">
						<tr class="top">
							<td colspan="2">
							<?php
							
if(isset($_POST["submit"]))  
 {  

$faculty_id = $_SESSION['SESS_USER_ID'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$subject = $_POST['subject'];
$question_level = $_POST['question_level'];
$total_marks = $_POST['total_marks'];
$total_hours = $_POST['total_hours'];


$result = $db->prepare("SELECT * FROM semester WHERE semester_id = '$semester'");
$result->execute();
$row = $result->fetch();
$semester_name1 = $row['semester_name'];
				
$result = $db->prepare("SELECT * FROM subject WHERE subject_id = '$subject'");
$result->execute();
$row = $result->fetch();
$subject_name = $row['subject_name'];
$subject_code = $row['subject_code'];

date_default_timezone_set('Asia/Kolkata');      
$date=date("d/m/Y h:i:sa");	
				
               ?> 
								<table>
									<tr>
											
										<td class="title" align="center">
											<a href="#" class="logo"><img src="../admin/assets/images/mu-logo.png" alt="" ></a>
										</td>
										
										
									</tr>
								</table>
							</td>
						</tr>
						
					
						
						<tr>
							<td>Subject : <?php echo $subject_name; ?> (<?php echo $subject_code; ?>)</td>					
														
						</tr>
						<tr>							
						    <td>Semester : <?php echo $semester_name1; ?></td>
							<td><?php echo $total_hours; ?> hr.</td>	
						</tr>
						<tr>							
						   <td>Total Marks : <?php echo $total_marks;?></td>	
							<td></td>	
						</tr>
						
						
<!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- -->

						
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question Of 1 Marks Each
							</td>
							
							<td>
								Marks 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
						
						<?php   
						
$marks_type1 = '1';
$marks_type3 = '3';
$marks_type4 = '4';
$marks_type6 = '6';
$marks_type8 = '8';
$total_marks = $_POST['total_marks'];
$total_marks30 = '30';
$total_marks50 = '50';
$total_marks100 = '100';
if ($total_marks == $total_marks30) {
						
						
						?>
						
						
						
						<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type1' ORDER BY RAND() LIMIT 6");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody> 
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 3 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
							
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type3' ORDER BY RAND() LIMIT 4");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 6 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type6' ORDER BY RAND() LIMIT 2");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
<!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- -->							
							
							
<?php } else if($total_marks == $total_marks50) {   ?>


<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type1' ORDER BY RAND() LIMIT 4");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody> 
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 3 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
							
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type3' ORDER BY RAND() LIMIT 6");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 4 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type4' ORDER BY RAND() LIMIT 4");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
							
								<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 6 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type6' ORDER BY RAND() LIMIT 2");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>




<!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- --><!---------------------------------  Marks Type 3rd ---------------------------------------- -->

<?php } else if($total_marks == $total_marks100) {   ?>



<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type1' LIMIT 4");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody> 
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 3 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
							
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type3' LIMIT 6");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							
							
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 4 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
							
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type4' ORDER BY RAND() LIMIT 6");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 6 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT * FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type6' ORDER BY RAND() LIMIT 5");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>
							
							
							
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							
							<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								All Question of 8 Marks Each
							</td>
							
							<td>
								 
							</td>
						</tr>
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						
							<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
							
							<tbody>
                <?php
				
				$result = $db->prepare("SELECT question,marks FROM question WHERE subject_name = '$subject' AND branch_id = '$branch' AND semester = '$semester' AND level = '$question_level' AND marks = '$marks_type8' ORDER BY RAND() LIMIT 3");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?> 							
								<tr> 
								    <td><?php echo $i;?>.  <?php echo $row['question'];?></td>
										<td ><?php echo $row['marks'];?></dh> 
									 
								  <?php } ?>
								</tr> 
								
									
							</tbody>

							
						
	<?php   } ?>						
							
						
						
						
						<!---------------------------------  Marks Type 3rd ---------------------------------------- -->
						
						
						<!--Price ($)-->
						
						
						
						
						
						<tr class="item last">
							<td>
								<!--Domain name (1 year)-->
							</td>
							
							<td>
								<!--$10.00-->
							</td>
						</tr>
						
						
 </table><?php   }?>
					<div class="text-right margin-top-20">
						<ul class="list-inline">
							<li><button type="button" class="btn btn-primary waves-effect waves-light"><i class='fa fa-print'></i> Print</button></li>
							<!--<li><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button></li>-->
						</ul>

					</div>
				</div>
				<!-- /.invoice-box -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
		<script type="text/javascript">
    function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})
	</script>
		<!-- /.row small-spacing -->		
		<!--<footer class="footer">
			<ul class="list-inline">
				<li><img src="assets/images/logo.png" alt="" class="ico-img">2019 © Nodestream Technology.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>-->
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
	<script src="assets/color-switcher/color-switcher.min.js"></script>
</body>
</html>