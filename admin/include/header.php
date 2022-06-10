<?php 
/**................................................................
 * @package Travel
 * www.codevety.com
 * Codevety Technology       
 * (conact@codevety.com)
 * ................................................................
Start session
*/
include "../admin/include/connect.php";
session_start();
if(!isset($_SESSION['SESS_ADMIN_ID'])){
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Marwadi University</title>
<link rel="icon" type="image/png" href="assets/images/logo.png"/>
	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

	<!-- Color Picker -->
	<link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
	
<link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
	<!-- FlexDatalist -->
	<link rel="stylesheet" href="assets/plugin/flexdatalist/jquery.flexdatalist.min.css">

	<!-- Popover -->
	<link rel="stylesheet" href="assets/plugin/popover/jquery.popSelect.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="assets/plugin/select2/css/select2.min.css">
	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">	
	
	<!-- iCheck -->
	<link rel="stylesheet" href="assets/plugin/iCheck/skins/square/blue.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">
	<link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">
	<!-- TinyMCE -->
	<link rel="stylesheet" href="assets/plugin/tinymce/skins/lightgray/skin.min.css">
	<!-- Must include this script FIRST -->
	<script src="assets/plugin/tinymce/tinymce.min.js"></script>

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>
		<link rel="stylesheet" href="assets/plugin/toastr/toastr.css">

	<!-- Color Picker -->
	<link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">

	<!-- Timepicker -->
	<link rel="stylesheet" href="assets/plugin/timepicker/bootstrap-timepicker.min.css">

	<!-- Touch Spin -->
	<link rel="stylesheet" href="assets/plugin/touchspin/jquery.bootstrap-touchspin.min.css">

	<!-- Colorpicker -->
	<link rel="stylesheet" href="assets/plugin/colorpicker/css/bootstrap-colorpicker.min.css">

	<!-- Datepicker -->
	<link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">

	<!-- DateRangepicker -->
	<link rel="stylesheet" href="assets/plugin/daterangepicker/daterangepicker.css">

	
<link rel="stylesheet" href="assets/plugin/RWD-table-pattern/css/rwd-table.min.css">
	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	
	
	<!-- Dropify -->
	<link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.php" class="logo" style="color:green;"><img src="assets/images/logo.png" alt="" class="ico-img"> Marwadi University</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="index.php" ><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
				</li>
				
				
				
				<li>
					<a class="waves-effect parent-item js__control" href="#" style="color:blue !important;"><i class="menu-icon mdi mdi-clipboard-account"></i><span>Branch</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="add_branch.php" style="color:green !important;"> Add Branch</a></li>
						<li><a  href="view_branch.php" style="color:green !important;"> View Branch</a></li>					
					</ul>
				
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#" style="color:blue !important;"><i class="menu-icon mdi mdi-medium"></i><span>Semester</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="add_semester.php" style="color:green !important;"> Add Semester</a></li>
						<li><a  href="view_semester.php" style="color:green !important;"> View Semester</a></li>					
					</ul>
				
				</li>
				
				<li>
					<a class="waves-effect parent-item js__control" href="#" style="color:blue !important;"><i class="menu-icon mdi mdi-book-open"></i><span>Subject</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="add_subject.php" style="color:green !important;"> Add Subject</a></li>
						<li><a  href="view_subject.php" style="color:green !important;"> View Subject</a></li>					
					</ul>
				
				</li>
				
				<li>
					<a class="waves-effect parent-item js__control" href="#" style="color:blue !important;"><i class="menu-icon mdi mdi-book-open-variant"></i><span>Chapter</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="add_chapter.php" style="color:green !important;"> Add Chapter</a></li>
						<li><a  href="view_chapter.php" style="color:green !important;"> View Chapter</a></li>					
					</ul>
				
				</li>
					<li>
					<a class="waves-effect parent-item js__control" href="#" style="color:blue !important;"><i class="menu-icon mdi mdi-account-multiple-plus"></i><span>Faculty</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="add_faculty.php" style="color:green !important;"> Add Faculty</a></li>
						<li><a  href="view_faculty.php" style="color:green !important;"> View Faculty</a></li>					
					</ul>
				
				</li>
				<li>
					<a href="view_question.php" style="color:blue !important;"><i class="menu-icon mdi mdi-book-open-page-variant" style="color:blue !important;"></i><span>View Question</span></a>
				</li>
				<li>
					<a href="profile.php" style="color:blue !important;"><i class="menu-icon mdi mdi-account-card-details" style="color:blue !important;"></i><span>View Profile</span></a>
				</li>
			
				
				<li>
					<a href="logout.php" style="color:red !important;"><i class="menu-icon mdi mdi-login-variant" style="color:red !important;"></i><span>Logout</span></a>
				</li>
				
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title" style="color:blue;">Hello <?php echo $_SESSION['SESS_ADMIN_FULL_NAME']; ?></h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		
		<!-- /.ico-item -->
		<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<div class="ico-item">
			<?php
					$admin_id = $_SESSION['SESS_ADMIN_ID'];
				$result = $db->prepare("SELECT * FROM user WHERE user_id='$admin_id'");
				$result->execute();
				$row = $result->fetch(); {  
				
				
               ?> 
				<img src="upload/admin/<?php echo $row['profile_pic']; }?>" alt="" class="ico-img">
			<ul class="sub-ico-item">
			<li ><a style="color:blue !important;">Hello <?php echo $_SESSION['SESS_ADMIN_FULL_NAME']; ?></a></li>
				<li><a href="profile.php" style="color:green !important;">Settings</a></li>
				
				<li><a href="logout.php" style="color:red !important;">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
<!--	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
			
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Oct, 27</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
	<!--	<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
<!--	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			
			
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
	<!--	<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>

