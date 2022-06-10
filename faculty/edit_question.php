<?php include "include/header.php";

?>



<!-- #color-switcher -->

<div id="wrapper">

	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
			<h1 class="page-title" style="color:blue;">EDIT QUESTION </h1>
				<div class="box-content">
				<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="index.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a></li>
						<li class="margin-bottom-10"> <a href="view_question.php"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">VIEW ALL Question</button></a></li>
				    
					</ul>								
				      <form data-toggle="validator" action="update_question.php" method="post">
					  
					   <?php
						$id=$_GET['id'];			
				$result = $db->prepare("SELECT * FROM question WHERE question_id = '$id'");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				    $question_id = $row['question_id'];
					 $subject_id = $row['subject_name'];
					$chapter_id = $row['chapter_name'];
					$branch_id = $row['branch_id'];
					$semester_id = $row['semester'];
					$question = $row['question'];
					$marks = $row['marks'];
					$level = $row['level'];
					
					$result = $db->prepare("SELECT * FROM subject WHERE subject_id = '$subject_id'");
				$result->execute();
				$row = $result->fetch();
				$subject_name = $row['subject_name'];
				
				$result = $db->prepare("SELECT * FROM chapter WHERE chapter_id = '$chapter_id'");
				$result->execute();
				$row = $result->fetch();
				$chapter_name = $row['chapter_name'];
				
				$result = $db->prepare("SELECT * FROM semester WHERE semester_id = '$semester_id'");
				$result->execute();
				$row = $result->fetch();
				$semester_name = $row['semester_name'];
				
				$result = $db->prepare("SELECT * FROM branch WHERE branch_id = '$branch_id'");
				$result->execute();
				$row = $result->fetch();
				$branch_name = $row['branch_name'];
				
				
				
				
				
				
				
               ?>
					  
					  
					  
					  <input type="hidden" maxlength="30" class="form-control" name="id"  value="<?php echo $id;?>" required>
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Branch Name</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<select class="form-control" name="branch">
					             	    <option value="<?php echo $branch_id;?>"><?php echo $branch_name;?> </option>
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
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label"> Semester Name</label>
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye frm-ico"></i></span>
								<select class="form-control" name="semester">
					             	    <option value="<?php echo $semester_id;?>"><?php echo $semester_name;?></option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM semester ");
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
								<label for="inputPassword" class="control-label">Subject Name</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
								<select class="form-control" name="subject">
					             	    <option value="<?php echo $subject_id;?>"><?php echo $subject_name;?></option>
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
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label"> Chapter Name</label>
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-line-chart"></i></span>
								<select class="form-control" name="chapter">
					             	    <option value="<?php echo $chapter_id;?>"><?php echo $chapter_name;?></option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM chapter");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['chapter_id'];?>"><?php echo $row['chapter_name'];?></option>
                                    
                           <?php  }?>
                              </select>
							</div>
									
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label"> Lebel</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-female"></i></span>
								<select class="form-control" name="label">
					             	    <option value="<?php echo $level;?>"><?php echo $level;?></option>
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
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Marks</label>
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								<input type="text" maxlength="30" class="form-control" name="marks"  value="<?php echo $marks;?>" required>
							</div>
									
								</div>
							</div>
							
							
								
								
								<br><br>
						
						<div class="form-group">
							<label for="inputName" class="control-label">Question</label>
							<textarea class="form-control" id="inp-type-5" name="question" value="<?php echo $question;?>" required><?php echo $question;?></textarea>
						
						</div>
								
						<br><br>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
						</div>
						<?php  }?>
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