<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
.form{


    border:2px solid black;

    width:400px;
    text-align:center;
}

</style>

<body>
   

   <?php include "index.php"; ?>

   <p> welcome </p>

  <div class = "form">
   <form action = "signup.php" method = "POST" >
 
    Name:
   <input type = "text" placeholder = "enter your name" name="name" > <br>

     LastName:
   <input type = "text" placeholder = "enter your name" name="lastname"> <br>
   

   <button type = "submit" > submit </button>


</form>
</div>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){


$name = $_POST["name"];
$lastname = $_POST["lastname"];

$servername = "localhost";
$user = "root";
$password = "";
$database = "dial";

$conn = mysqli_connect($servername , $user , $password , $database);

$sql = "INSERT INTO `user` (`srno`, `name`, `lastname`) VALUES (NULL, '$name', '$lastname')";

$result = mysqli_query($conn, $sql);
}

?>

</body>
</html>