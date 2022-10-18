<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style5.css">
    <title>Document</title>
    <style>
        @font-face {
            font-family:myFont1;
            src: url(Fonts/jakusty.regular.ttf);
        }
        @font-face {
            font-family: myFont2;
            src: url(Fonts/adam-cg-pro.regular.ttf);
        }

        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.hero{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient( rgba(0, 0, 0, 0.561),rgba(0, 0, 0, 0.464));
    position: relative;
    padding:0 5%;
    display: flex;
    align-items: center;
    justify-content: center;
}
nav{
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px 8%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
nav .logo{
    width: 80px;

}
nav ul li {
    list-style: none;
    display: inline-block;
    margin-left: 40px;
}
nav ul li a{
    text-decoration: none;
    color: white;
    font-size: 17px;
    font-family: myFont2;
    
}
nav ul li a:hover{
    color: rgb(241, 161, 0);

}
.hover-line::after{
    content: '';
    display: block;
    width: 0%;
    height: 3px;
    background-color: rgb(241, 161, 0);
    transition:width .2s;
}
.hover-line:hover::after{
    width: 100%;
    transition: width .2s ;
}
.backimage{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
.footer{

    position: absolute;
    bottom:10px ;
    font-size: 17px;
    color: white;
}
.footer a{
    font-size: 17px;
    text-decoration: none;
    color:rgb(241, 161, 0);
}
    </style>
</head>
<body>
    <div class="hero">
        <img src="Images/old-black-background-grunge-texture-dark-wallpaper-blackboard-chalkboard-room-wall.jpg" alt="Background image" class="backimage">
        
        <nav>
            <img src="images/Picsart_22-10-06_07-53-57-458.png" class="logo" alt="Logo">
            <ul>
                <li><a href="home.html" class="hover-line">HOME</a></li>
                <li><a href="create-account.html" class="hover-line">CREATE USER</a></li>
                <li><a href="users.html" class="hover-line">USERS</a></li>
                <li><a href="#" class="hover-line">USER HISTORY</a></li>
                <li><a href="https://www.thesparksfoundationsingapore.org/" class="hover-line" target="blank">ABOUT US</a></li>
            </ul>
        </nav>



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
    echo "new recod added";
}
else{
    echo"error";
}
$conn->close();

?>

        
        <div class="footer">
            &copy; Copy rigt made by Shivam Bhaumik - <a href="https://www.thesparksfoundationsingapore.org/" target="blank">The spark Foundation</a>
        </div>
        
    </div>
</body>
</html>