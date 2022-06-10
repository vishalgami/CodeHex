<?php include "include/header.php";

?>

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
		
			<div class="col-xs-12">
			
				<div class="invoice-box">
				<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="view_question.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a>
				    
					</ul>
					<table>
						<tr class="top">
							<td colspan="2">
							<?php
							$id= $_GET['id'];
				$result = $db->prepare("SELECT * FROM question WHERE question_id = '$id'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				    $question_id = $row['question_id'];
					 $subject_id = $row['subject_name'];
					$chapter_id = $row['chapter_name'];
					$branch_id1 = $row['branch_id'];
					$semester_id = $row['semester'];
					$question = $row['question'];
					$marks = $row['marks'];
					$level = $row['level'];
				$result = $db->prepare("SELECT * FROM subject WHERE subject_id = '$subject_id'");
				$result->execute();
				$row = $result->fetch();
				$subject_name = $row['subject_name'];
				$subject_code = $row['subject_code'];
				
				$result = $db->prepare("SELECT * FROM chapter WHERE chapter_id = '$chapter_id'");
				$result->execute();
				$row = $result->fetch();
				$chapter_name = $row['chapter_name'];
				
				$result = $db->prepare("SELECT * FROM semester WHERE semester_id = '$semester_id'");
				$result->execute();
				$row = $result->fetch();
				$semester_name = $row['semester_name'];
				
				$result = $db->prepare("SELECT * FROM branch WHERE branch_id = '$branch_id1'");
				$result->execute();
				$row = $result->fetch();
				$branch_id = $row['branch_name'];
				
									
				date_default_timezone_set('Asia/Kolkata');      
                $date=date("d/m/Y h:i:sa");	
				
               ?> 
								<table>
									<tr>
										<td class="title">
											<a href="#" class="logo"><img src="../admin/assets/images/mu-logo.png" alt="" style=" height:100px; width:280px;">  <?php //echo $student_name;?></a>
										</td>
										
										<td>Today Date
											<br>
											
											<?php echo $date; ?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
					
						
						<tr class="heading">
							<td>
								Detail  
							</td>
							
							<td>
								All Detail
							</td>
							
						</tr>
						
						<tr class="item">
							<td>
								Subject 
							</td>
							
							<td>
								<?php echo $subject_name; ?>  (<?php echo $subject_code; ?>)
							</td>
						</tr>
						<tr class="item">
							<td>
								Chapter 
							</td>
							
							<td>
								<?php echo $chapter_name; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Semester 
							</td>
							
							<td>
								<?php echo $semester_name; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Branch 
							</td>
							
							<td>
								<?php echo $branch_id; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Total Marks
							</td>
							
							<td>
								<?php echo $marks; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Lebel 
							</td>
							
							<td>
								<?php echo $level; ?>
							</td>
						</tr>
						
						<tr class="item">
							<td>
								Question 
							</td>
							
							<td>
								<?php echo $question; ?>
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
						
						
					</table><?php   } ?>
					<div class="text-right margin-top-20">
						<ul class="list-inline">
							<li><button type="button" class="btn btn-primary waves-effect waves-light" id="lnkPrint"><i class='fa fa-print'></i> Print</button></li>
							<!--<li><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button></li>-->
						</ul>
					</div>
				</div>
				<!-- /.invoice-box -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
		<script type="text/javascript">
    $( document ).ready(function() {
    $('#lnkPrint').click(function()
     {
         window.print();
     });
});
	</script>
		<!-- /.row small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li><img src="../admin/assets/images/logo.png" alt="" class="ico-img">  2019 © Codehex Team</li>
				<li><a href="#">Privacy & Terms </a></li>
			</ul>
		</footer>
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