<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Company X</h2><br>
	<label><a href="home.php">logout</a> </label>
  </div>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  	
  
  	<div class="input-group">
  <h1><?php
    $name=$_SESSION['name'];
    echo "<h1>Welcome $name</h1>";
    ?> </h1>
  	</div>
  	  </form>
</body>
</html>