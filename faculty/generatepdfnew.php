<?php include "include/header.php";

	
if(isset($_POST["submit"]))  
 {  

$faculty_id = $_SESSION['SESS_USER_ID'];
$total_hours = $_POST['total_hours'];
$total_no_of_set = $_POST['total_no_of_set'];
$subject_name = $_POST['subject'];
$semester = $_POST['semester'];
$branch_id = $_POST['branch'];

$result = $db->prepare("SELECT question,marks FROM question WHERE faculty_id='$faculty_id' AND subject_name='$subject_name' AND branch_id='$branch_id' AND semester='$semester' ");
    $result->execute();
				for($i=1; $row = $result->fetch(); $i++){


?>

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
		
			<div class="col-xs-12">
			
				<div class="invoice-box">
				
					<table>
						<tr class="top">
							<td colspan="2">
							
								<table>
									<tr>
										<td class="title">
											<a href="#" class="logo"><img src="../admin/upload/user/<?php ?>" alt="" style=" height:80px; width:80px;">  <?php echo $row['faculty_id'];?></a>
										</td>
										
										<td>Today Date
											<br>
											
											<?php echo $row['faculty_id'];?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
					
						
						
						
						
 </table><?php   }}?>
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
				<li><img src="assets/images/logo.png" alt="" class="ico-img">2019 © Nodestream Technology.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
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