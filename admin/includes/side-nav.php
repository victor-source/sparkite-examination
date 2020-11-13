<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/css/style.css">
<link rel="stylesheet" type="text/css" href="vendor/css/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.css">
        <title>User dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

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

<nav class="navbar navbar-expand-sm navbar-light"style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: rgb(203 171 150); color: white; ">
	<a href="#" style="color: white;" class="navbar-brand"><i style="color: white"  class="fa fa-book"></i> Examination </a>
</nav>

     <div class="wrapper" style="">
       <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: rgb(203 171 150); ">
                <div class="sidebar-header"style="background-color: rgb(203 171 150); ">
                    <h3>Sparkite Exams</h3>
                </div>

                <ul class="list-unstyled components"style="background-color: rgb(203 171 150); ">
                    <li class="active"style="background-color: rgb(203 171 150); ">
                        
                        <a href="#homeSubmenu" data-toggle="collapse" style="background-color: rgb(203 171 150); " aria-expanded="false">Exams</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu"style="background-color: rgb(203 171 150); ">
                            <li><a href="addExam.php">Create Exam</a></li>
                            <li><a href="manageExams.php">Manag Exams</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Results</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Tests</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="$">create test</a></li>
                            <li><a href="#">Manage tests</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Total Attempt</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs"style="background-color: rgb(203 171 150); ">
                    <li><a href="../index.php" class="download">Download Terms of services</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to home page</a></li>
                </ul>
            </nav>
            <style type="text/css">
            /*
    DEMO STYLE
*/
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
    margin-top: -40px;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}
                .box{
                   width: auto;
                }

a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}

    .box1{
        background-color: rgb(150 92 82);
        margin: 13px;
        padding: 18px;
        color: white;
        border-radius: 5px;
        text-align: center;
    }
    .box2{
        background-color: rgb(141 111 90);
        margin: 13px;
        padding: 18px;
        color: white;
        border-radius: 5px;
        text-align: center;
    }
    .box3{
        background-color: rgb(193 175 82);
        margin: 13px;
        padding: 24px;
        color: white;
        border-radius: 5px;
        text-align: center;
    }
    .box4{
        background-color: rgb(203 171 180);
        margin: 13px;
        padding: 18px;
        color: white;
        border-radius: 5px;
        text-align: center;
    }
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        text-decoration: none;
        color: white;
    }

        </style>

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
