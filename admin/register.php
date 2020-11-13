<?php 
session_start();
include '../db/config.php';
$msg = "";
if (isset($_POST['register'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$org = $_POST['org'];
	$password = $_POST['password'];
	$password = sha1($password);
	$check = mysqli_num_rows($conn->query("Select * from organizations Where email = '$email' "));
	if ($check>0) {
		$msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> email already used. try to regiser a new user. Thank you.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}else{
		$sql = $conn->query("insert into organizations(fname, lname, email, password, org) values('$fname', '$lname','$email','$password','$org')");
		if ($sql) {
			$msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Registration successfull
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
$_SESSION['admin'] = $email;
header("location:dashboard.php");
		}else{
			$msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Registration failed something went wrong
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/css/style.css">
<link rel="stylesheet" type="text/css" href="vendor/css/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.css">
 <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.css">
<link rel="icon" href="favicon.png" />
<title>Admin Registrarion</title>


</head>
<div id="preloder">
   <div class="loader"></div>
</div>
<body>

<nav class="navbar navbar-expand-sm navbar-light"style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: rgb(203 171 150); color: white;">
	<a href="#" style="color: white;" class="navbar-brand"><i style="color: white"  class="fa fa-book"></i> Examination </a>
  <button style="border: 1px solid white;" tyle="color: white" class="navbar-toggler mr-right" type="button" style="color: white" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav navbar-nav mr-auto" style="color: white;">
	<li class="nav-item" ><a   ref="index.php" style="color: white;" class="nav-link">Home</a></li>
	<li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">Login</a></li>
	<li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">About us</a></li>
</ul>


</div>
</nav>
<hr style="border: 2px solid brown;">
<br>
<div class = "container box">
	
	<p style="text-align: center;"><strong>Enter your admin info</strong></p>
	<?php echo "$msg"; ?>
	<div class="container form-box">
		<form class="form-group" method="post">
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="First Name" type="text" name="fname" required="">
				</div>
				<div class="col">
					<input class="form-control" placeholder="Last Name" type="text" name="lname" required="">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="Email" type="email" name="email" required="">
				</div>
				<div class="col">
					<input class="form-control" placeholder="Organization" type="text" name="org" required="">
				</div>
			</div>
				<br>
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="Password" type="password" name="password" required="">
				</div>
				
			</div>
			<div class="row">
			<div class="col"><input type="submit" class="btn" name="register" style="background-color: rgb(203 171 150); box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.7), 0 4px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 4px;"></div>
			<div class="col"><p style="margin-top: 15px; margin-left: -50%;">already registered? <a href="login.php">Login</a> now </p></div>
			</div>
		</form>
		
	</div>
</div>
















<script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>


</body>

</html>