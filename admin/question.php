 
<?php session_start();
include "../db/config.php";
$msg = "";
if (!isset($_SESSION['add'])) {
	header('location: dashboard.php');
	

	}else{
if(isset($_POST['submit'])) {
	$code = $_SESSION['add'];
	$name = $_SESSION['name'] ;
	$email = $_SESSION['admin'];
    
	$question =htmlentities(mysqli_real_escape_string($conn , $_POST['question']));
	$choice1 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice1']));
	$choice2 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice2']));
	$choice3 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice3']));
	$choice4 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice4']));
	$correct_answer = mysqli_real_escape_string($conn , $_POST['answer']);
	$sql = $conn->query("insert into questions(code, question,ans1,ans2,ans3,ans4,answer,name,email) values('$code', '$question','$choice1','$choice2','$choice3','$choice4', '$correct_answer','$name','$email')");
		if ($sql) {
			$msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> question added successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}else{
			$msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> adding process failed something went wrong
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}
}
}
?>
<?php
include("includes/side-nav.php");
?>
<div id="content">
    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">               <i class="fa fa-arrow-left"></i>              <span>Navbar</span>
   </button>
<hr style="border: 2px solid brown;">
<div class = "container box">

</nav></header>
		  <form method="post">

		
		<?php echo "$msg"; ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Note!</strong> this question is being added into the exam code<strong> <?php echo $_SESSION["add"]; ?> </strong>of name <strong><?php echo $_SESSION['name']; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
				<p>
						<label>Question</label>
						<textarea type="text" class="form-control" style="" name="question" required=""></textarea>
					</p>
					<p>
						<label>Choice #1</label>
						<input type="text"class="form-control" style=""  name="choice1" required="">
					</p>
					<p>
						<label>Choice #2</label>
						<input type="text" class="form-control" style="" name="choice2" required="">
					</p>
					<p>
						<label>Choice #3</label>
						<input type="text"class="form-control" style=""  name="choice3" required="">
					</p>
					<p>
						<label>Choice #4</label>
						<input type="text"class="form-control" style=""  name="choice4" required="">
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
