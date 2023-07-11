<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    body{
        margin:0;
        padding:0;
    }
  .nav{
    color:red;
    border:2px solid black;

    display:flex;
    padding:4px;
    border-radius:5px;
    
  }
  .nav .menu a{
   
    padding:14px;
    text-decoration: none;
  }

  .nav .search input{

    border:2px solid black;
    border-radius:8px;
  }


  .nav .button a{
   background-color: black;
   color:white;
   width:180px;
   text-decoration :none;
  }
</style>
<body>

   <div class  = "nav">
    


     <div class = "menu">
        
     <a href = " " > home </a>
      <a href = " " >about </a>
       <a href = " " > edit </a>
        <a href = " " > help </a>
    
    </div>

    <div class = "search">
    

    <input type = "search" placeholder = "search here">

</div>

<div class = "button">



<a href="signup.php">Sign up</a>

<a href="login.php">Login</a>

</div>


</div>


</div>


</body>
</html>