<?php include "include/header.php";

?>



<!-- #color-switcher -->

<div id="wrapper">

	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
			<h1 class="page-title" style="color:blue;">GENERATE PAPER </h1>
				<div class="box-content">
					<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="index.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a></li>
						<!--<li class="margin-bottom-10"> <a  href="view_chapter.php"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">VIEW ALL  GENERATE PAPER</button></a></li>-->

				    
					</ul> 
				      <form data-toggle="validator" action="detail_generate_paper.php" method="post">
					  
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Branch</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="branch">
					             	    <option value="">Select Branch</option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM branch");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['branch_id'];?>"><?php echo $row['branch_name'];?></option>
                                    
                           <?php  }?>
                              </select>
							</div>
									
								</div>
								
							</div>
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Semester</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="semester">
					             	    <option value="">Select Semester</option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM semester");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['semester_id'];?>"><?php echo $row['semester_name'];?></option>
                                    
                           <?php  }?>
                              </select>
							</div>
									
								</div>
								
							</div>
							
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Subject</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="subject">
					             	    <option value="">Select Subject</option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM subject");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?> (<?php echo $row['subject_code'];?>)</option>
                                    
                           <?php  }?>
                              </select>
							</div>
									
								</div>
								
							</div>
							
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Question Lavel</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="question_level">
					             	    <option value="">Select Question Lavel</option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM question_label");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['question_label_name'];?>"><?php echo $row['question_label_name'];?></option>
                                    
                           <?php  }?>
                              </select>
							</div>
									
								</div>
								
							</div>
							
							
							
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Total Marks</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="total_marks">
					             	    <option value="">Select Total Marks</option>
										<option value="30">30</option>										
										<option value="50">50</option>
										<option value="100">100</option>										
										
										 
                              </select>
								
							</div>
									
								</div>
								
							</div>
							
							<!--<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Total Question</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<input type="text" maxlength="500" class="form-control" name="total_question"  placeholder=" Enter Total Question" required>
							</div>
									
								</div>
								
							</div>-->
							
							
							
							
							
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Total Hours</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<input type="text" maxlength="500" class="form-control" name="total_hours"  placeholder=" Enter Total Hours" required>
							</div>
									
								</div>
								
							</div>
						
					
								
						<br><br>
						
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Generate Paper</button>
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
				<li><img src="../admin/assets/images/logo.png" alt="" class="ico-img">  2019 © Codehex Team</li>
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