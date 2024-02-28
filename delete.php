<?php
include "confiq.php";
$id = $_GET['id'];
$query2="delete from Student where id= '$id'";
$result2=mysqli_query($con,$query2);
if($result2){

    echo "<script>alert('Record deleted') window.location.hrep='shoe.php';</script>";
    echo "<script>window.location.hrep='shoe.php';</script>";
      
}
else{
    echo  "<script> alert('Record failed')</script>";
}
?>