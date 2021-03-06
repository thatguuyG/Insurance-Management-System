<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
    
  
 
</head>
<body >

  <!--nav part right side -->
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top" style=" background: grey;">
          <div class="container" style="color: black;">
            <a class="navbar-brand" href="index.php"><button type="button" class="btn btn-secondary btn-lg" style="background: #5F9EA0;">InsurancePro</button></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto" style="text-decoration-color: black;">
                
                
                
                <li class="nav-item dropdown" style="float: right;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="float: right;">
                    Other Pages
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                    <a class="dropdown-item" href="support.html">Support</a>
                    <a href="index.php?logout='1'" style="color: red; text-align: center;">logout</a>
                    
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

<div id="middle">
<div class="header">
	<h2>Welcome to InsurancePro</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    
</div>
</div>





<!--fixed navbar part-->
    <div id="wrapper">

<!-- Sidebar -->
<div id="sidebar-wrapper" style="color: black; background:grey; font weight: 900; background: #5F9EA0">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
        </li>
        <li>
            <a href="index.php" style="color: black; font weight: bold">Dashboard</a>
        </li>
        <li>
            <a href="enquiries.html" style="color: black; font weight: bold">Enquiries</a>
        </li>
        <li>
            <a href="proposals.html" style="color: black; font weight: bold">Proposals</a>
        </li>
        <li>
            <a href="payments.html" style="color: black; font weight: bold">Payments</a>
        </li>
        <li>
            <a href="policy.html" style="color: black; font weight: bold">Policy management </a>
        </li>
        <li>
            <a href="claims.html" style="color: black; font weight: bold">Claim management</a>
        </li>
        <li>
            <a href="contact.html" style="color: black; font weight: bold">Contact Insurer</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="text1">
  <?php  if (isset($_SESSION['username'])) : ?>
                 <p>Welcome to Insurance pro <strong><?php echo $_SESSION['username']; ?></strong></p>
                 
                   <?php endif ?>
  </div>
        <h1>Simple Sidebar</h1>
        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>
</html>