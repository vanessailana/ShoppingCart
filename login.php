<?php 
session_start();

if(isset($_SESSION['username'])){
echo "Today is " . date("Y/m/d") . "<br>";
echo "Welcome " . $_SESSION['username'];
}


 
if(isset($_POST['logout'])){
 session_start();
 session_destroy();

 header('location: logout.php');
}



?>

<html>
<head>
<title>Logged in</title>
</head>

<body>
 <form method = "post" name = "logout">
 <input type = "submit" name="logout" value="log me out">
 </form>
</body>
</html>
