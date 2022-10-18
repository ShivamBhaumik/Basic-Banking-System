<?php 
include 'connection.php';
if(isset($_GET['s_id'] ){
    $S_ID=$_GET['s_id'];

    $sql="DELETE FROM `send_money` WHERE s_id=$S_ID";
   
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script language="javascript" type="text/javascript"> 
        alert("Successfully deleted");
        window.location.href="user_history.php"
    </script>';
    }else{
        die(mysqli_error($con));
    }
}


?>