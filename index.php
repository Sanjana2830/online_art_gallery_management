<?php
   include("connection.php");
   session_start(); // Start the session
   ?> 
<!DOCTYPE HTML>
<html>
   <head>
      <title>The Art CLub</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="shortcut icon" href="https://mymodernmet.com/wp/wp-content/uploads/2018/05/painting-ideas-3-1.jpg" type="image/x-icon">
      <link rel="icon" href="https://mymodernmet.com/wp/wp-content/uploads/2018/05/painting-ideas-3-1.jpg" type="image/x-icon">
   </head>
   <body>
      <!-- Header -->
      <header id="header" class="alt" >
         <div class="logo"><a href="index.php"><span>The Art Club</span></a></div>
         <ul class="nav navbar-nav custom-navbar">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="index.php?page=customer_register">Customer register</a></li>
            
         </ul>
         <a href="#menu">
            <p class="custom-para">Login</p>
         </a>
      </header>
      <!-- Nav -->
      <nav id="menu">
         <ul class="links">
            <li><a href="index.php?page=customer_login">Customer</a></li>
            <li><a href="index.php?page=admin_login">Admin</a></li>
         </ul>
      </nav>
      <section>
         <?php
            if ( isset( $_GET[ 'page' ] ) ) {
            
            	$page_name = $_GET[ 'page' ];
            
            	include( "login_register/" . $page_name . ".php" );
            
            } else {
            
            	include( "login_register/main.php" );
            
            }
            
            ?>
      </section>
<!-- Visit : www.artclub.com -->
      <!-- Footer -->
      <footer id="footer">
         <div class="copyright">
            <div class="footer text-center">Design & Develop By Sanjana and Yashasvi | Visit : www.theartclub.com</div>
            &copy; Online Artwork Studios.All rights reserved.
         </div>
      </footer>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>