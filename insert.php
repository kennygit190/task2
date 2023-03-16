<?php
include'connection.php';

    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['password'];
    $d=$_POST['location'];

    $sql="insert into user(id,name,password,location) values('$a','$b','$c','$d')";
    $a=mysqli_query($conn,$sql);
    header('location:index.php')
?>