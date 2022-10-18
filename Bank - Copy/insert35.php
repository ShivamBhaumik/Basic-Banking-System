<?php
$servername="sql106.epizy.com";
$username="epiz_32819648";
$password="AOB0Bm1KFh";
$dbname="epiz_32819648_user";


$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection fail");
}
$S_ID=$_POST['S_ID'];
$CASH=$_POST['CASH'];
$R_ID=$_POST['R_ID'];

$sql= "INSERT INTO `send_money` (`S_ID`, `CASH`, `R_ID`) VALUES ('$S_ID', '$CASH', '$R_ID')";
if($conn->query($sql)==true){
    echo '<script language="javascript" type="text/javascript"> 
    alert("successfully Transfered");
    window.location.href="users.php"
</script>';
}
else{
    echo"error";
}
$conn->close();

?>
