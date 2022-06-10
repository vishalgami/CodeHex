<?php include "include/header.php";

?>


<div id="wrapper">
	<div class="main-content">
		<div class="row row-inline-block small-spacing">			
			<div class="col-xs-12">
			<h1 class="page-title" style="color:blue;"><!--<img src="assets/images/logo.png" alt="" class="ico-img"> -->LIST OF ALL FACULTY</h1>
				<div class="box-content">
				<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="index.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a></li>
						<li class="margin-bottom-10"> <a href="add_faculty.php"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">ADD FACULTY</button></a></li>
				    
					</ul>
					
					
				
					<div class="table-responsive">
						
						<table class="table table-bordered">
							<thead> 
								<tr> 
									<th>S.No.</th> 
									<th>Picture</th> 
									<th>Full Name</th> 
									<th>User Name</th> 
									<th>Email</th> 
									<th>Mobile No.</th> 
									<th>View Detail</th> 
								
                                    <th>Action</th> 									
								</tr> 
							</thead> 
							<tbody>
                <?php
				$result = $db->prepare("SELECT * FROM user WHERE member= 'faculty'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				$a= $row['status'];
				$b = 'Active';
               ?> 							
								<tr> 
									<th scope="row"><?php echo $i; ?></th> 
									<td><img src="upload/user/<?php echo $row['profile_pic'];?>" alt=""  style=" height:50px; width:50px;"></td> 
									<td><?php echo $row['full_name'];?></td> 
									<td><?php echo $row['username'];?></td> 
									<td><?php echo $row['mail_id'];?></td> 
									 
									<td><?php echo $row['mobile_no'];?></td> 
									<td><ul class="list-inline">	
								     <li class="margin-bottom-10">
										<a href="view_detail_faculty.php?user_id=<?=$row['user_id'] ?>"  class="btn btn-xs btn-warning" >View Detail</a>
								         	
									 </li>
										 
							     </ul></td> 
									
									<td>
									   <ul class="list-inline">	
									     <li class="margin-bottom-10">
										  <a href="edit_faculty.php?id=<?=$row['user_id'] ?>" onclick="return confirm('Are you sure you want to Edit this FACULTY Detail ?');"" class="btn btn-success btn-xs waves-effect waves-light" >Edit</a>
									       
										 </li><br>
									     <li class="margin-bottom-10">
										 <a href="delete_faculty.php?id=<?=$row['user_id'] ?>"  onclick="return confirm('Are you sure you want to Delete this FACULTY ?');"" class="btn btn-danger btn-xs waves-effect waves-light"  >Delete</a>
								         	
										 </li>
									
									  </ul>
								 </td> 
								  <?php } ?>
								</tr> 
								
									
							</tbody> 
						</table>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
		<!-- /.row row-inline-block small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li><img src="assets/images/logo.png" alt="" class="ico-img">  2019 © Codehex Team</li>
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