<?php
$conn=mysqli_connect("localhost","root","","idatech");
if($conn==true){
    echo'connected succesfully';
}
else{
    echo'connection error';
}
?>