<?php
   
   $con= mysqli_connect("localhost:3377","root","","crudsystem");
   if (!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }

   $res= mysqli_query($con,"select * from crud");
   if (!$res) {
       die("Query failed: " . mysqli_error($con));
   }
       ?>