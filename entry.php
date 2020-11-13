<?php
require_once('db/config.php');
error_reporting(0);
session_start(); 
if(isset($_SESSION['code'])){
	$code = $_SESSION['code'];
	$query = $conn->query("Select * from exams Where code='$code' ");
	$show = mysqli_fetch_array($query);
}else{
	header("location:index.php");
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
<title>Exam Seat</title>


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

<style type="text/css">
	.box{
		padding: 20px;
		border: 1px solid brown;
		border-radius: 4px;
	}
</style>
<div class="box container">
	<h2> Description </h2>
	<p>here  is a discription to your exam with its details</p>
	<hr style="border: 2px solid brown">
	<p>Organization: <strong><?php echo $show["organization"]; ?></strong></p>
	<p>Exam Duration: <strong><?php echo $show["time"]; ?> hrs</strong></p>
	<p>Subjects: <strong><?php echo $show["examName"]; ?></strong></p>
	<?php if ($show['notice']>0) {
	?><textarea class="form-control" value="" disabled="" ><?php echo $show['time']; ?></textarea>
<?php }else{?>
	<p style="color: blue;"> <strong>You dont have any aditional information before commencing. proceed to commencement</strong></p>
<?php } ?>
	<form method="post">
	<a href='question.php?qno=$code' class="btn" name="start" value="start" style="background-color: rgb(203 171 150); box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.7), 0 4px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 4px;"> start</a>
	</form>
</div>




<script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>

</body>
</html>