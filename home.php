<?php 
session_start();
if(isset($_SESSION['username'])){
echo "<center> <strong> Today is " . date("Y/m/d") . "<br>" ." </strong> </center>";
echo "<center> <strong> Welcome " . $_SESSION['username']." !</strong> </center>";
}
 
if(isset($_POST['logout'])){
 session_start();
 session_destroy();
 header('location: logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home.php">Tsarbucks</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Menu </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Rewards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Shopping Cart</a>
      </li>
    </ul>
  </div>
</nav>


<center>
 <form method = "post" name = "logout">
 <input type = "submit" class="btn btn-primary" style="margin-top:-100px; margin-right: -1000px" name="logout" value="log me out">
 </form>
 </center>

</body>
</html>