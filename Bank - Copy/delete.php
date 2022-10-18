<?php 
include 'connection.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $sql="DELETE FROM `user` WHERE id=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script language="javascript" type="text/javascript"> 
        alert("Successfully Removed");
        window.location.href="users.php"
    </script>';
    }else{
        die(mysqli_error($con));
    }
}


?>