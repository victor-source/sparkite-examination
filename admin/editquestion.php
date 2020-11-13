<?php session_start(); ?>
<?php include "../db/config.php";
if (isset($_SESSION['admin'])) {
	?>



<?php 
if (isset($_GET['qno'])) {

	$qno = mysqli_real_escape_string($conn , $_GET['qno']);
	 $query = $conn->query("Select * from questions Where id='$qno'");


  $show = mysqli_fetch_array($query);

	if ($qno) {
		$query = "SELECT * FROM questions WHERE question = '$qno' ";
		$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if (mysqli_num_rows($run) > 0) {
			while ($row = mysqli_fetch_array($run)) {
				 $qno = $row['id'];
                 $question = $row['question'];
                 $ans1 = $row['ans1'];
                 $ans2 = $row['ans2'];
                 $ans3 = $row['ans3'];
                 $ans4 = $row['ans4'];
                 $correct_answer = $row['answer'];
			}
		}
		else {
			echo "<script> alert('error');
			window.location.href = 'allquestions.php'; </script>" ;
		}
	}
	else {
		header("location: allquestions.php");
	}
}
?>
<?php 
if(isset($_POST['submit'])) {
	$question =htmlentities(mysqli_real_escape_string($conn , $_POST['question']));
	$choice1 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice1']));
	$choice2 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice2']));
	$choice3 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice3']));
	$choice4 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice4']));
	$correct_answer = mysqli_real_escape_string($conn , $_POST['answer']);
    

	$query = "UPDATE questions SET question = '$question' , ans1 = '$choice1' , ans2= '$choice2' , ans3 = '$choice3' , ans4 = '$choice4' , answer = '$correct_answer' WHERE id = '$qno' ";
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0 ) {
		echo "<script>alert('Question successfully updated');
		window.location.href= 'allquestions.php'; </script> " ;
	}
	else {
		"<script>alert('error, try again!'); </script> " ;
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
  <li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">Home</a></li>
  <li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">Login</a></li>
  <li class="nav-item" ><a href="index.php" style="color: white;" class="nav-link">About us</a></li>
</ul>


</div>
</nav></header>
<hr style="border: 2px solid brown;">
<br>
</nav>

<div style="padding: 20px; "><form method="post" action="">

					<p>
						<label>Question</label>
						<input type="text" class="form-control" style="" name="question"value="<?php echo $question; ?>" required="">
					</p>
					<p>
						<label>Choice #1</label>
						<input type="text"class="form-control" style="" value="<?php echo $ans1; ?>"  name="choice1" required="">
					</p>
					<p>
						<label>Choice #2</label>
						<input type="text" class="form-control" style="" value="<?php echo $ans2; ?>" name="choice2" required="">
					</p>
					<p>
						<label>Choice #3</label>
						<input type="text"class="form-control" style="" value="<?php echo $ans3; ?>" name="choice3" required="">
					</p>
					<p>
						<label>Choice #4</label>
						<input type="text"class="form-control" style="" value="<?php echo $ans4; ?>" name="choice4" required="">
					</p>
					<p>
						<label for="sel1">Correct answer</label>
						<select name="answer" class="form-control" id="sel1">
                        <option value="a">Choice #1 </option>
                        <option value="b">Choice #2</option>
                        <option value="c">Choice #3</option>
                        <option value="d">Choice #4</option>
                    </select>
					</p>
					<p>
						
						<input type="submit" class="btn btn-primary" style="" name="submit" value="Submit">
					</p>
				
				</form></div>
			</div>
		</main>

		

	</body>
</html>

<?php } 
else {
	header("location: admin.php");
}
?>