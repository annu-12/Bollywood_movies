<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bollywood Movie Website</title>
    <!-- Bootstrap 3 -->
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
    <link rel="stylesheet" href="welcome.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
   
  

</head>

<body class="container" id="image1">
 
<div class="page-header">
<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.Welcome to Bollywood Movies Website!!.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn warning">Reset your password</a>
        <a href="logout.php" class="btn danger">Sign Out of Your Account</a>
    </p>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="about.html">About us</a>
    <a href="OTHERS.html">Other websites</a>
    <a href="follow.html">Follow us</a>
</div>
</div>
 
<!-- Main Page Content -->
<br>
<div class="container" >
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; More</span>  
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<br>
<br>
         <br>
         <br>
         <br>
         <br>
         <br>
<div class="col-md-6 col-lg-4 movie-tile text-center" >
    <a href="kb.html"><img src="images/pic18.jpg" width="263" height="380"></a>
    <h2>Kabir Singh</h2>
    <h5><b>Director: </b> Sandeep Reddy Vanga </h5>
    <h5><b>Category: </b> Drama/Action </h5>
<div class="w3-container w3-lobster font-effect-brick-sign">
<p class="w3-xxlarge">Star Rating</p>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
</div>

<div class="col-md-6 col-lg-4 movie-tile text-center" >
   <a href="s30.html"><img src="images/Super_30_The_Film.jpg" width="263" height="351"></a>
    <h2>Super 30</h2>
    <h5><b>Director: </b> Vikas bahl </h5>
    <h5><b>Category: </b> Drama </h5>
<div class="w3-container w3-lobster font-effect-brick-sign">
<p class="w3-xxlarge">Star Rating</p>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
</div>

 <div class="col-md-6 col-lg-4 movie-tile text-center" >
    <a href="zf.html"><img src="images/zoya.jpg" width="263" height="380"></a>
    <h2>Zoya factor</h2>
    <h5><b>Director: </b> Abhishek sharma </h5>
    <h5><b>Category: </b> Drama/Sport </h5>
<div class="w3-container w3-lobster font-effect-brick-sign">
<p class="w3-xxlarge">Star Rating</p>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="welcome.php" class="btn info">HOME</a>
<a href="1.html" class="btn warning">1</a>
<a href="2.html" class="btn danger">2</a>


<br>
<br>
<br>
</div>

</body>
</html>