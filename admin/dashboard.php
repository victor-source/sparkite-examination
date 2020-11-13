<?php session_start();
include("includes/side-nav.php");
?>
            
            <!-- Page Content Holder -->
            <div id="content">
            		
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-arrow-left"></i>
                                <span>Navbar</span>
                            </button>

                       
                

          <div class = "container boxx">

    <div class="row">
        <div class="col box1">
            <a href='addExam.php'>Ceate exam</a>
        </div>
        <div class="col box2">
            <a href='manageExams.php'>Manage Exam</a>
        </div>
        <div class="col box3">
            <a href='results.php'>View Results</a>
        </div>
        <div class="col box4">
            <a href='Attempts.php'>Total Attempts</a>
        </div>
    </div>  
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
    </body>
</html>
