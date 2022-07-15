<?php
$conn = mysqli_connect("localhost","root","","log in");
if(isset($_POST['sbtn'])){
	$email_address = $_POST['email_address'];
	$password = $_POST['password'];
	$sql = "INSERT INTO `users`(`email`, `password`) VALUES ('$email_address','$password')";
	mysqli_query($conn,$sql);
	header("location:log.php");
}
?>


<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Betler Multipurpose Forms HTML Template">
	<meta name="author" content="Ansonika">
	<title>Log In Page</title>


	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">


	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
		rel="stylesheet">


	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link href="css/custom.css" rel="stylesheet">
</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>

	<div class="container-fluid">
		<div class="row row-height">
			<div class="col-lg-6 background-image p-0" data-background="url(img/main_bg_gray.jpg)">
				<div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(58, 65, 194, 0.85)">
					<a href="#0" id="logo"><img src="img/logo.svg" alt="" width="46" height="40"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>

					<div>
						<h1>Login Page</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>

					</div>
				</div>
			</div>
			<div class="col-lg-6 d-flex flex-column content-right">
				<div class="container my-auto py-5">
					<div class="row">
						<div class="col-lg-9 col-xl-7 mx-auto position-relative">
							<h4 class="mb-3">Login</h4>
							<form class="input_style_1" method="post">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
								<a href="#0" class="social_bt google">Login with Google</a>
								<div class="divider"><span>Or</span></div>
								<div class="form-group">
									<label for="email_address">Email Address</label>
									<input type="email" name="email_address" id="email_address" class="form-control">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" class="form-control">
								</div>
								<div class="clearfix mb-3">
									<div class="float-start">
										<label class="container_check">Remember Me
											<input type="checkbox">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="float-end">
										<a id="forgot" href="javascript:void(0);">Forgot Password?</a>
									</div>
								</div>
								<button type="submit" class="btn_1 full-width" name="sbtn">Login</button>
							</form>
							<p class="text-center mt-3 mb-0">Don't have an account? <a href="#0">Sign Up</a></p>
							<form class="input_style_1" method="post">
								<div id="forgot_pw">
									<h4 class="mb-3">Forgot Password</h4>
									<div class="form-group">
										<label for="email_forgot">Login email</label>
										<input type="email" class="form-control" name="email_forgot" id="email_forgot">
									</div>
									<p>You will receive an email containing a link allowing you to reset your password
										to a new preferred one.</p>
									<div class="text-center"><input type="submit" value="Reset Password" class="btn_1">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="container pb-3 copy">© Betler - All Rights Reserved.</div>
			</div>
		</div>

	</div>



	<script src="js/common_scripts.js"></script>
	<script src="js/common_func.js"></script>

</body>


</html>