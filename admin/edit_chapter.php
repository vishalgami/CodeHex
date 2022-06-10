<?php include "include/header.php";

?>






<!-- #color-switcher -->

<div id="wrapper">

	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
			<h1 class="page-title" style="color:blue;">EDIT CHAPTER </h1>
				<div class="box-content">
				   <ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="index.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a></li>
						<li class="margin-bottom-10"> <a  href="view_chapter.php"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">VIEW ALL CHAPTER</button></a></li>

				    
					</ul>
					
				      <form data-toggle="validator" action="update_chapter.php" method="post">
					  
					  <?php
					 $id=$_GET['id'];
				$result = $db->prepare("SELECT * FROM chapter WHERE chapter_id= :post_id");
				$result->bindParam(':post_id', $id);
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
				             
				
               ?>
			   <input type="hidden" name="id" value="<?php echo $row['chapter_id'];?>" required>
					  
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Chapter</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<input type="text" maxlength="50" class="form-control" name="chapter"  value="<?php echo $row['chapter_name'];?>" required>
							</div>
									
								</div>
								
							</div>
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Subject</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="subject">
					             	   
										 <?php
									
				$result = $db->prepare("SELECT * FROM subject");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?> (<?php echo $row['subject_code'];?>) </option>
                                    
                           <?php  }?>
                              </select>
							</div>
									
								</div>
								
							</div>
						
					<?php  }?>
								
						<br><br>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
						</div>
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
		
		<!-- /.row small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li><img src="assets/images/logo.png" alt="" class="ico-img">  2019 © Codehex Team</li>
				<li><a href="#">Privacy & Terms </a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Validator -->
	<script src="assets/plugin/validator/validator.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
	<script src="assets/color-switcher/color-switcher.min.js"></script>
	

	<!-- Datepicker -->
	<script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>
	
	<!-- DateRangepicker -->
	<script src="assets/plugin/daterangepicker/daterangepicker.js"></script>

	<!-- Demo Scripts -->
	<script src="assets/scripts/form.demo.min.js"></script>
	<script src="assets/plugin/dropify/js/dropify.min.js"></script>
	<script src="assets/scripts/fileUpload.demo.min.js"></script>

	
	
</body>
</html>