<?php include "include/header.php";

?>


<div id="wrapper">
	<div class="main-content">
		<div class="row row-inline-block small-spacing">			
			<div class="col-xs-12">
		<h1 class="page-title" style="color:blue;"><!--<img src="assets/images/logo.png" alt="" class="ico-img"> -->LIST OF ALL CHAPTER</h1>
				<div class="box-content">
				<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="index.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a></li>
						<li class="margin-bottom-10"> <a  href="add_chapter.php"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">ADD CHAPTER</button></a></li>

				    
					</ul> 

					<div class="table-responsive">
						
						<table class="table table-bordered">
							<thead> 
								<tr> 
									<th>S.No.</th> 
									<th>Chapter Name</th> 
                                    <th>Subject Name</th>
                                    <th>Branch Name</th>
                                   <th>Semester Name</th> 
									 <th>Action
							
								</tr> 
							</thead> 
							<tbody>
					
							
							 <?php
							 
							// SELECT tblemodata.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,tblemodata.name,tblemodata.mobile,tblemodata.address,tblemodata.remark,tblemodata.Description,tblemodata.PostingDate from tblemodata join tblemployees on tblemodata.empid=tblemployees.id order by lid desc
							 
							
				
				$result = $db->prepare(" SELECT chapter.chapter_id as lid,subject.branch_id,subject.semester_id,subject.subject_name,subject.subject_code,chapter.chapter_name,chapter.chapter_id,chapter.subject_id from chapter join subject on chapter.subject_id=subject.subject_id ");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
				
               ?> 							
								<tr> 
									<th scope="row"><?php echo $i; ?></th> 
									
									<td><?php echo $row['chapter_name'];?></td> 
									<td><?php echo $row['subject_name'];?>  ( <?php echo $row['subject_code'];?> )    </td> 
									<td><?php echo $row['branch_id'];?></td> 
									<td><?php echo $row['semester_id'];?></td> 
					                <td>
									   <ul class="list-inline">	
									     <li class="margin-bottom-10">
										  <a href="edit_chapter.php?id=<?=$row['chapter_id'] ?>" onclick="return confirm('Are you sure you want to Edit this CHAPTER Detail ?');"" class="btn btn-success btn-xs waves-effect waves-light" >Edit</a>
									       
										 </li>
									     <li class="margin-bottom-10">
										 <a href="delete_chapter.php?del_chapter=<?=$row['chapter_id'] ?>"  onclick="return confirm('Are you sure you want to Delete this CHAPTER ?');"" class="btn btn-danger btn-xs waves-effect waves-light"  >Delete</a>
								         	
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