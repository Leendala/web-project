<?php

require "./connection.php";
if(isset($_POST['buttonsubmit'])){
  
    $username= $_POST['name'];
    $password= $_POST['pass'];
    $query="SELECT id FROM crud WHERE name='$username' and pass='$password'";
    $res=mysqli_query($con,$query);
    if (mysqli_num_rows($res)>0) {
       $row=mysqli_fetch_assoc($res);
       session_start();
       $_SESSION['id']=$row['id'];
       header('location:users.php');
    }else{
        echo"user not found";
    }

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    
    <title>Sign Up</title>
    <style>
    .form{
        width: 280px;
       height: 300px;

    }
    </style>
</head>
<body>
    <div class="form">
    <div class="title">
    <p>Login form:</p>
    </div>
    
    <form action="" method="post">
    <input type="number" name="id" placeholder="id" required>
        <input type="text" name="name" placeholder="username" required>
        <input type="password" name="pass" placeholder="Password" required>
        <button type="submit" name="buttonsubmit">Login</button>

    </form>
    </div>
    
</body>
</html>
