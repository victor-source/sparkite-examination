 
<?php session_start();
include "../db/config.php";
$msg = "";
$email = $_SESSION['admin'];
 $query = $conn->query("Select * from questions Where email='$email'");


  $show = mysqli_fetch_array($query);

  $users =  $show['code'];

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
<div class = "container box">
<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
	<caption class="title">All Quiz questions</caption>
		<thead>
			<tr>
				<th>Q.NO</th>
				<th>Exam Name</th>
				<th>Code</th>
				<th>Time</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
        
        <?php 
            $email = $_SESSION['admin'];
            $query = "SELECT distinct * FROM exams";

            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $i = 1;
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
            	if ($row['email']==$_SESSION['admin']) {
            	$qno = $i;
                $name = $row['examName'];
                $code = $row['code'];
                $time = $row['time'];
                echo "<tr>";
                echo "<td>$qno</td>";
                echo "<td>$name</td>";
                echo "<td>$code</td>";
                echo "<td>$time hrs</td>";
                echo "<td> <a href='editexam.php?qno=$code'> Edit </a></td>";
              
                echo "</tr>";
                $i = $i+1;
             }}
         }
        ?>
	
		</tbody>
		
	</table>
</div>
				<script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>


			</body>
			</html>
