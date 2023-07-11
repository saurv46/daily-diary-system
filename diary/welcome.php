<?php 

session_start();


if(!isset($_SESSION['loggdin']) || $_SESSION["loggdin"]!= true){

    header("location: login.php");

    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.btn a{
  padding: 3px;
  text-decoration : none;
  background-color : black;
  margin:8px;
  border:2px solid black;
  border-radius:5px;
  color:white;
  
}


</style>
<body>
<?php include "index.php";?>
<?php    $names = $_SESSION["username"] ; ?>
<p>welcome <?php echo "$names" ?> :-</p> 



</body>
<hr>

<p> how was your day</p>

<div class = "btn">
<a href = "write.php" > write </a>

<a href = "read.php"> read  </a>
</div>
</html>