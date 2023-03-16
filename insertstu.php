<?php
include'connection.php';

    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $sex=$_POST['gender'];

    $sql="insert into student(id,student_name,age,sex) values('$id','$name','$age','$sex')";
    $a=mysqli_query($conn,$sql);
    header('location:student.php')
?>