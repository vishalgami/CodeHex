<?php include "include/header.php";

?>

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
			
				<div class="invoice-box">
				<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="view_faculty.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a>
				    
					</ul>
					<table>
						<tr class="top">
							<td colspan="2">
							<?php
							$user_id= $_GET['user_id'];
				$result = $db->prepare("SELECT * FROM user WHERE user_id=$user_id");
				$result->execute();
				$row = $result->fetch(); 	
				$full_name = $row['full_name'];
				$username = $row['username'];
				$mail_id = $row['mail_id'];
				$mobile_no = $row['mobile_no'];
				$status = $row['status'];
				$member = $row['member'];
				$branch = $row['branch'];
				$subject = $row['subject'];
				$date_of_registation = $row['date_of_registation'];					
				date_default_timezone_set('Asia/Kolkata');      
                $date=date("d/m/Y h:i:sa");	{
				
               ?> 
								<table>
									<tr>
										<td class="title">
											<a href="#" class="logo"><img src="upload/user/<?php echo $row['profile_pic'];?>" alt="" style=" height:80px; width:80px;">  <?php echo $full_name;?></a>
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
								Detail Name 
							</td>
							
							<td>
								Faculty Detail
							</td>
						</tr>
						
						<tr class="item">
							<td>
								Faculty Name
							</td>
							
							<td>
								<?php echo $full_name; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Faculty Username
							</td>
							
							<td>
								<?php echo $username; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Faculty Email
							</td>
							
							<td>
								<?php echo $mail_id; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Faculty Mobile Number
							</td>
							
							<td>
								<?php echo $mobile_no; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Faculty Type
							</td>
							
							<td>
								<?php echo $member; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Faculty Branch
							</td>
							
							<td>
								<?php echo $branch; ?>
							</td>
						</tr>
						<tr class="item">
							<td>
								Faculty Subject
							</td>
							
							<td>
								<?php echo $subject; ?>
							</td>
						</tr>
						
						
						
						<tr class="item">
							<td>
								Date Of Registation
							</td>
							
							<td>
								<?php echo $date_of_registation; ?>
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
					<footer class="footer">
			            <ul class="list-inline">
				            <li><img src="assets/images/logo.png" alt="" class="ico-img">  2019 © Codehex Team</li>
				            <li><a href="#">Privacy & Terms </a></li>
			           </ul>
		</footer>
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