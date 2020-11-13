<?php 
session_start();
include '../db/config.php';
$msg = "";

function random($length){
	$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVVWXYZabcdefghijklmnopqrstuvwxyz';
	return substr(str_shuffle($str_result),0, $length);
}
$user = $_SESSION['admin'];
 $query = $conn->query("Select * from organizations Where email='$user'");
$show = mysqli_fetch_array($query);
$org =  $show['org'];
if (isset($_POST['submit'])) {
	$time = $_POST['time'];
	$code = random(7);
	$name = $_POST['name'];
	
	
		$sql = $conn->query("insert into exams(examName, organization,code,email,time) values('$name', '$org','$code','$user','$time')");
		if ($sql) {
			$msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Exam created successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
$_SESSION['add'] = $code;
$_SESSION['name'] = $name;

header("location:question.php");

		}else{
			$msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Registration failed something went wrong
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}
}
 ?>

<?php
include("includes/side-nav.php");
?>
<div id="content">
    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">               <i class="fa fa-arrow-left"></i>              <span>Navbar</span>
   </button>

<div class = "container box">	
	<p style="text-align: center;"><strong>Enter your Exam info</strong></p>
	<?php echo "$msg"; ?>
	<div class="container form-box">
		<form class="form-group" method="post">
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="Exam Name" type="text" name="name" required="">
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col">
					<input class="form-control" placeholder="Time" type="number" name="time" required="">
				</div>
				<div class="col">
					<input class="form-control" placeholder="total Questions" type="number" name="sum" required="">
				</div>
			</div>
			
			<div class="col"><input type="submit" class="btn" name="submit" style="background-color: rgb(203 171 150); box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.7), 0 4px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 4px;"></div>
			</div>
		</form>
		
	</div>
</div>
<!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

<script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>


</body>

</html>