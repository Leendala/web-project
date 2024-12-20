<?php 
require "./connection.php";
if(isset($_POST['buttonsubmit'])){
    $id= $_POST['id'];
    $username= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['pass'];
    $query ="INSERT INTO crud(id,name,email,pass)VALUES ('$id',' $username',' $email',' $password')";
    $res=mysqli_query($con,$query);
    if($res){
        echo 'user added';
    }
    else{
        echo 'user not added';
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
</head>
<body>
    <div class="form">
    <div class="title">
    <p>Sign Up form:</p>
    </div>
    
    <form action="" method="post">
    <div class="input-box">
     <input type="number" name="id" placeholder="id" required>
     </div>
     <div class="input-box">
     <input type="text" name="name" placeholder="Username" required>
     </div>
     <div class="input-box">
     <input type="email" name="email" placeholder="Email" required>
     </div> 
     <div class="input-box">
     <input type="password" name="pass" placeholder="Password" required>
     </div>
       
        <button type="submit" name="buttonsubmit" value="submit">Sign Up</button>
    </form>
    </div>
    
</body>
</html>
