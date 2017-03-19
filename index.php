<?php
session_start();
	
	$conn = new PDO('mysql:host=localhost;dbname=Comp484DB','root','root');
	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		$query = $conn->prepare("SELECT COUNT(id) FROM admin WHERE username = '$username' AND password = '$password' ");
		$query->execute();
		
		$count = $query->fetchColumn();
		
		
		if($count == "0"){
			$_SESSION['username'] = $username;

			header('location:login.php');	


		}


		else{
			$message = "wrong password, username, or you didnt enter anything idiot";
			echo "<script type='text/javascript'>alert('$message');</script>";	
			echo "<div class=jumbotron> <h1> Wrong Input!</h1>      
  <p><img src=http://vignette2.wikia.nocookie.net/simpsons/images/c/c3/D%27oh.jpg/revision/latest?cb=20141226214635></p>
</div>";
		}			
	}﻿
?>﻿

<!DOCTYPE html>
<html lang="en">
  <head>
  
       <?php include 'style.php';?>
    
  </head>
  <body>
  <center>



    <h1>Welcome To Tarbucks </h1>
    <h2> The best Coffee int town! </h2>
    <h3> Login type in your credentials and the magic will begin! </h3>

    <title> The best coffee </title>
    </center>

    <center>

    <form method="post">

	<input type="text" name="username" placeholder="User Name">

	<input type="password" name="password" placeholder="*******">

<div class="container">

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login Idiot</button>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center> Hi either customer or barista </center></h4>
        </div>
        <div class="modal-body">
        <img src="https://media3.giphy.com/media/xT5LMGMqRlrWjTe9WM/200_s.gif">
          <p>Just Want to Make You Are Not A Robot.</p>
            <p>I wanted a stupid modal to appear</p>
            <p> You can either actually login or close this modal and do something else </p>

        </div>
        <div class="modal-footer">


        <input type="submit" class="btn btn-outline-primary" name="login" value="login">

       
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

          

	
	</form>
	</center>
     


   <div class="container">
	<p></p>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="http://331mrnu3ylm2k3db3s1xd1hg.wpengine.netdna-cdn.com/wp-content/uploads/2016/05/slack-imgs-3.com_.gif" width="1000px" height="1000px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" width="1000px" height="1000px" src="https://i.ytimg.com/vi/9APdDdpe-eE/hqdefault.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid"  width="1000px" height="1000px" src="http://331mrnu3ylm2k3db3s1xd1hg.wpengine.netdna-cdn.com/wp-content/uploads/2016/05/416810.gif" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>




  
  <?php include 'scripts.php';?>
  

  </body>

</html>
