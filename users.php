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
        display:grid;
        min-height:100vh;
        place-items: center;
        background:  rgb(59, 192, 225);
    }
    table{
        width: 500px;
       /* height: 180px;*/
        border-collapse: collapse;
        background: rgb(253, 253, 253);
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
</style>
<body>
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
</body>
</html>