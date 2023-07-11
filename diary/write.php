<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     
     #form{

        margin :90px;
        margin-top: 0px;

     }
    #text{

        width:800px;
        height:400px;
    }

    </style>
<body>
    
<?php include "index.php"; ?>
<H1>WRITE TODAYS </H1>
<form id = "form" action = "write.php" method = "POST">

<textarea id = "text" name ="subject" > </textarea>  


<button type = "submit">submit </button>
</form>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "dial";

    $text = $_POST["subject"];

    $conn = mysqli_connect($servername , $user , $password , $database);
    $sql = "INSERT INTO `data` (`srno`, `data`, `date`) VALUES (NULL, '$text', current_timestamp())";

    $result = mysqli_query($conn, $sql);
}


?>
</body>

<a href = "read.php"> read  </a>
</html>