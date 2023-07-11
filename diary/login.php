<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "index.php"; ?>

<p> welcome </p>

<div class = "form">
<form action = "login.php" method = "POST" >

 Name:
<input type = "text" placeholder = "enter your name" name="name" > <br>

  LastName:
<input type = "text" placeholder = "enter your name" name="lastname"> <br>


<button type = "submit" > submit </button>


</form>
</div>

<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){



    $servername = "localhost";
    $user = "root";
    $passawaord = "";
    $database = "dial";


    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
   
    $conn = mysqli_connect($servername , $user , $passawaord , $database);

    $sql = "select * from user where name ='$name' AND lastname ='$lastname'";

    $result = mysqli_query($conn , $sql);
    

    $num = mysqli_num_rows($result);

    echo "$num";

    if($num == 1){
        $login = true;
        session_start();

        $_SESSION["loggdin"] = true;
        $_SESSION["username"] = $name;
        header("location:welcome.php");
    }
}
?>

</body>
</html>