<?php
session_start();
	include("db/config.php");
session_destroy();
	$msg = "";
	if (isset($_POST['examEntry'])) {
		$code = $_POST['exam_code'];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$query = $conn->query("Select * from exams Where code='$code'");
        $row = mysqli_num_rows($conn->query("Select * from exams Where code = '$code' "));
        if ($row>0) {
        	$show = mysqli_fetch_array($query);
			$_SESSION['fname'] = $fname;
			$_SESSION['code'] = $code;
			header("location: entry.php");
        }else{
        	$msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> This examination does not exist. please input a correct exam code. Thank you!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
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
<title>Examination</title>


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
	<li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">Home</a></li>
	<li class="nav-item" ><a href="login.php" style="color: white;" class="nav-link">Login</a></li>
	<li class="nav-item" ><a href="register.php" style="color: white;" class="nav-link">Create account</a></li>
	<li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">About us</a></li>
</ul>


</div>
</nav>
<hr style="border: 2px solid brown;">
<br>
<div class = "container box">
	<p>to take an examination, you will need to have your exam code assigned to you by your examiner.</p>
	<p style="text-align: center;"><strong>Enter your exam code below</strong></p>
	<?php echo "$msg"; ?>
	<div class="container form-box">
		<form class="form-group" method="post">
			<input type="text" name="exam_code" placeholder="Exam Code...." style="color:rgb(179 132 100);"class="form-control" required=""><br>
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="First Name" type="text" name="fname" required="">
				</div>
				<div class="col">
					<input class="form-control" placeholder="Last Name" type="text" name="lname" required="">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="Email Address" type="email" name="email" required="">
				</div>
				<div class="col">
					<input class="form-control" placeholder="Phone" type="number" name="phone" required="">
				</div>
			</div>



			<input type="submit" class="btn" name="examEntry" style="background-color: rgb(203 171 150); box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.7), 0 4px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 4px;">
		</form>
		<p style="border:1px solid red; padding: 5px;">Remember that all questions are timed and once the next page has been activated, there is sno going back. ensure you do not participate in any malpractice as your IP is being monitored.</p>
	</div>
</div>
















<script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>


</body>

</html>