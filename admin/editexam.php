<?php session_start(); ?>
<?php include "../db/config.php";
if (isset($_SESSION['admin'])) {
?>

<?php
include("includes/side-nav.php");
?>
<div id="content">
            		
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-arrow-left"></i>
                                <span>Navbar</span>
                            </button>

<div class = "container box">
<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
		<caption class="title">All Quiz questions</caption>
		<thead>
			<tr>
				<th>Q.NO</th>
				<th>Question</th>
				<th>Option1</th>
				<th>Option2</th>
				<th>Option3</th>
				<th>Option4</th>
				<th>Correct Answer </th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
        
        <?php 
        if (isset($_POST['add'])) {
          $_SESSION['add']=$_GET['qno'];
          header('location:question.php');
        }
            if (isset($_GET['qno'])) {
            //echo $_GET['qno'];
              
            $query = "SELECT * FROM questions";
            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $n = 1;
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
              if ($row['email'] == $_SESSION['admin']&& $row['code'] == $_GET['qno']) {
                $qno = $row['question'];
                $num = $row['id'];
                $question = $row['question'];
                $option1 = $row['ans1'];
                $option2 = $row['ans2'];
                $option3 = $row['ans3'];
                $option4 = $row['ans4'];
                $Answer = $row['answer'];
                echo "<tr>";
                echo "<td>$n</td>";
                echo "<td>$question</td>";
                echo "<td>$option1</td>";
                echo "<td>$option2</td>";
                echo "<td>$option3</td>";
                echo "<td>$option4</td>";
                echo "<td>$Answer</td>";
                echo "<td> <a href='editquestion.php?qno=$qno'> Edit </a></td>";
              
                echo "</tr>";
                $n = $n + 1;
             }
           }
         }
       }
        ?>
	
		</tbody>
		
	</table>
  <form method="post">
  <input type="submit" class="btn btn-primary" name="add"></form>
</div>
        <script type="text/javascript" src="vendor/js/wow.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/home.js"></script>

</div>

      </body>
      </html>

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
<?php } 
else {
	header("location: admin.php");
}
?>


