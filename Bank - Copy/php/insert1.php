<?php
$servername="localhost";
$username="root";
$password="";
$dbname="user";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection fail");
}
$NAME=$_POST['NAME'];
$EMAIL=$_POST['EMAIL'];
$ACCOUNT_BALANCE=$_POST['ACCOUNT_BALANCE'];

$sql= "INSERT INTO `user` (`NAME`, `EMAIL`, `ACCOUNT_BALANCE`) VALUES ('$NAME', '$EMAIL', '$ACCOUNT_BALANCE')";
if($conn->query($sql)==true){
    echo '<script language="javascript" type="text/javascript"> 
    alert("message successfully Inserted");
    window.location.href="home.html"
</script>';
}
else{
    echo"error";
}
$conn->close();

?>
