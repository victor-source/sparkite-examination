<?php 
require_once('db/config.php'); 
error_reporting(0);
session_start();
 $code = $_SESSION['code'];


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
	<li class="nav-item" style=" float: right;"><a  href="index.php" style="color: white;"  class="nav-link">end exam</a></li>
	
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
	<?php 
		if (isset($_GET['qno'])) {
            $i = 1;
			$sql = "SELECT questions.code, questions.question,questions.answer,questions.ans1,questions.ans2,questions.ans3,questions.ans4 from questions";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);

			$cnt=1;
			if($query->rowCount() > 0)
			{

				foreach($results as $result)
			{  if ($result->code == $code) {
				if (empty(trim($result->question))) {
				}else{
				
			?>
			<form class="form-group">
			<p><?php echo $cnt." ". htmlentities($result->question);?> </p>

                <select class="form-control">
                	<option><?php echo htmlentities($result->ans1);?></option>
                	<option><?php echo htmlentities($result->ans2);?></option>
                	<option><?php echo htmlentities($result->ans3);?></option>
                	<option><?php echo htmlentities($result->ans4);?></option>
                </select>

            </form>
                <?php $cnt=$cnt+1;}}}}} ?>
	
</div>




<script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>

</body>
</html>