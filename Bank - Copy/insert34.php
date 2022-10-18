<?php
$servername="sql106.epizy.com";
$username="epiz_32819648";
$password="AOB0Bm1KFh";
$dbname="epiz_32819648_user";

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
    alert("successfully Inserted");
    window.location.href="users.php"
</script>';
}
else{
    echo"error";
}
$conn->close();

?>
