<?php
include 'connection.php';
$id=$_GET['id'];

$result=mysqli_query($connect,"delete from product where id=$id");
if($result)
{
    
    header("location:index.php");
    echo "<script>alert('data deleted successfully')</script>";
}

?>