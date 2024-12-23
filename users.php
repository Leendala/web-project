<?php
require './connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query="DELETE FROM crud WHERE id='$id'";
    $res=mysqli_query($con,$query);
    if($res){
        header('location:users.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>   
    body{
        background:  rgb(121, 186, 199);
    }

    .endTable {
        width: 500px;
       /* height: 180px;*/
        border-collapse: collapse;
        background: rgb(253, 253, 253);
        display:grid;
        place-items: center;
        align-items: baseline;
        margin-left: 24rem;
        transform: translateX(20rem);
        transform: translateY(10rem);
    }

    table,tr,td,th{
        border: 1px solid rgb(100,100,100);
   }
   td{
    text-align: center;
  }
  tr{
    height: 40px;
  }
  th{
    width: 300px;
  }
  a{
    color:blue;
    text-decoration: none;
  }



  .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f4f4f9;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 50px;
            width: 50px;
            background-color: rgb(59, 192, 225);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }
        .company-name {
            margin-left: 15px;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: rgb(59, 192, 225);
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav a:hover {
            color: #333;
        }



</style>
<body>




<header class="header">
        <div class="logo-container">
            <div class="logo">L</div>
            <div class="company-name">Welcome</div>
        </div>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
    </header>



<div class="endTable">
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>delete</th>
            <th>edit</th>

        </thead>
        <tbody>
            <?php 
            require'./connection.php';
            $query="SELECT* FROM crud";
            $res=mysqli_query($con,$query);
            if(mysqli_num_rows($res)>0){
            while ($row=mysqli_fetch_assoc($res)){
                ?>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['pass']?></td>
                  <td><a href="users.php?id=<?php echo $row['id']?>">delete</a></td>
                  <td><a href="./edit.php?id=<?php echo $row['id']?>">update</a></td>
                  </tr>
                  <?php
            }
               
            }
?>
        </tbody>
        
    </table>
    </div>
</body>
</html>