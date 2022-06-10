<?php include "include/header.php";
?>


<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-md-3 col-xs-12">
				<div class="box-content bordered primary margin-bottom-20">
				<?php
					$customer_id = $_SESSION['SESS_USER_ID'];
				$result = $db->prepare("SELECT * FROM user WHERE user_id = $customer_id");
				$result->execute();
				$row = $result->fetch(); {  
			
				
               ?> 
               
					<div class="profile-avatar">
						<img src="../admin/upload/user/<?php echo $row['profile_pic'];?>" alt="">
						<a href="profile_pic_update.php" class="btn btn-block btn-friend"><i class="fa fa-check-circle"></i> Change Picture </a>
						<!--<a href="#" class="btn btn-block btn-inbox"><i class="fa fa-user ico"></i>   <strong>Betty Simmons</strong></a>-->
					<h3><strong><?php echo $_SESSION['SESS_USER_FUll_NAME']; ?></strong></h3>
						<!--<h4>Owner at Our Company, Inc.</h4>-->
						
					</div>
					 
					<!-- .profile-avatar -->
					<table class="table table-hover no-margin"><br><br>
						<tbody>
							<tr>
								<td>Status</td>
								<td><span class="notice notice-danger"> Active<?php // echo $row['status']; ?></span></td>
							</tr>
							<tr>
								<td>Rating</td>
								<td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></td>
							</tr>
							<tr>
								<td>Member Since</td>
								<td><?php echo $row['date_of_registation']; ?></td>
							</tr>
						</tbody>
					</table>
					<br><br>
				</div>
				<!-- /.box-content bordered -->

				
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-3 col-xs-12 -->
			<div class="col-md-9 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>About Me      <a href="profile_info_update.php" class="btn btn-success btn-rounded btn-bordered waves-effect waves-light" >Edit Profile</a></h4>
							<!-- /.box-title -->
							
							<!-- /.dropdown js__dropdown -->
							<div class="card-content">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>User Name:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7"><?php echo $row['username']; ?></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Full Name:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7"><?php echo $row['full_name']; ?></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Mobile:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7"><?php echo $row['mobile_no']; ?></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Email:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7"><?php echo $row['mail_id']; ?></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Designation:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7"><?php echo $row['member']; ?></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Status:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">Active <?php // echo $row['status']; ?></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
					<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Latest News</h4>
					<!-- /.box-title -->
					<div class="card-content">
						
								<ul class="notice-list">
									
									<li>
										<a href="#">
											<span class="avatar bg-success"><i class="glyphicon glyphicon-user"></i></span>
											<span class="name">New Signup</span>
											<span class="desc">There are new settings available</span>
											<span class="time">5 hours ago</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="avatar bg-warning"><i class="fa fa-flag"></i></span>
											<span class="name">New Message</span>
											<span class="desc">There are new settings available</span>
											<span class="time">1 day ago</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="avatar bg-pink"><i class="fa fa-gear"></i></span>
											<span class="name">Settings</span>
											<span class="desc">There are new settings available</span>
											<span class="time">1 year ago</span>
										</a>
									</li>
								</ul>
								<!-- /.notice-list -->
							
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Update Password</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form data-toggle="validator" action="update_password.php" method="post" enctype="multipart/form-data">
							
						 <div class="form-group">
						   <label for="exampleInputPassword1">New Password</label>
							<input type="text" class="form-control" name="new_password" id="exampleInputPassword1" placeholder="Enter your New password">
						 </div>														
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->		  <?php } ?>
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