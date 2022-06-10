<?php
/**................................................................
 * @author Amit patel 
 * Codevety Technology      
 * ................................................................
Start session
*/
include "admin/include/connect.php";
	session_start();
	if(isset($_SESSION['SESS_ADMIN_ID'])){
    header("location: index.php");
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
	<link rel="stylesheet" href="admin/assets/styles/style.min.css">
<link rel="icon" type="image/png" href="admin/assets/images/logo.png"/>
	<!-- Waves Effect -->
	<link rel="stylesheet" href="admin/assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="process_login_admin.php" method="post" class="frm-single">
		<div class="inside">
			<div class="title"><strong style="color:blue;"><img src="img/mulogo.png" alt="" class="ico-img"></strong> </div>
			<!-- /.title -->
			<div class="frm-title"><strong> Enter Login Detail</strong></div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" placeholder=" Enter Email" name="username" class="frm-inp" required><i class="fa fa-envelope frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" placeholder="Password" name="password" class="frm-inp" required><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
					<!-- /.checkbox -->
				</div>
				<!-- /.pull-left -->
				<div class="pull-right"><a href="forgot_password.php" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
				<!-- /.pull-right -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
				<!--	<div class="txt-login-with txt-center">or login with</div>-->
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-sm-12 -->
				<!--<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>-->
				<!-- /.col-sm-6 -->
			<!--	<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>-->
				<!-- /.col-sm-6 -->
				<div class="col-sm-12">
					
					<a class="waves-effect" href="index.php"><i class="fa fa-arrow-left"></i><span>  Previous Page</span></a>
					<!-- /.txt-login-with -->
				</div>
			</div>
			<!-- /.row -->
			<!--<a href="page-register.html" class="a-link"><i class="fa fa-key"></i>New to Elizah Travel Register.</a>-->
			<div class="frm-footer"style="color:blue; text-align: center;"> <img src="admin/assets/images/logo.png" alt="" class="ico-img">  Codehex Team © 2019.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="admin/assets/scripts/jquery.min.js"></script>
	<script src="admin/assets/scripts/modernizr.min.js"></script>
	<script src="admin/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="admin/assets/plugin/nprogress/nprogress.js"></script>
	<script src="admin/assets/plugin/waves/waves.min.js"></script>

	<script src="admin/assets/scripts/main.min.js"></script>
</body>
</html>