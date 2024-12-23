<?php 
require "./connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query="SELECT * FROM crud WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
 }
 else{
    $row="";
 }
 if(isset($_POST['update'])){
     $id= $_POST['id'];
     $username= $_POST['name'];
     $email= $_POST['email'];
     $password= $_POST['pass'];
     $query ="UPDATE crud SET  name='$username',email='$email',pass='$password' WHERE id='$id'";
     $res=mysqli_query($con,$query);
     if($res){
         echo 'user updated';
         header('location:users.php');
     }
     else{
         echo 'user not updated';

     }
    
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
     <input type="number" name="id" placeholder="id" value="<?php if (isset($row)){
        echo $row['id'];
     }?>">
     </div>
     <div class="input-box">
     <input type="text" name="name" placeholder="Username" value="<?php if (isset($row)){
        echo $row['name'];
     }?>">
     </div>
     <div class="input-box">
     <input type="email" name="email" placeholder="Email" value="<?php if (isset($row)){
        echo $row['email'];
     }?>">
     </div> 
     <div class="input-box">
     <input type="password" name="pass" placeholder="Password" value="<?php if (isset($row)){
        echo $row['pass'];
     }?>">
     </div>
       
        <button  id type="submit" name="update" value="update">update user</button>
    </form>
    </div>
    
</body>
</html>
