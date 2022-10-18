<?php
$connection = mysqli_connect("sql106.epizy.com","epiz_32819648","AOB0Bm1KFh","epiz_32819648_user");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style3.css">
    <title>USERS</title>
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
.table-container{
    position: absolute;
    top: 20vh;
    padding: 0 10% ;
    margin: 40px auto 0;

}
.heading{
    font-size: 40px;
    text-align: center;
    color: white;
    margin-bottom: 40px;
}
.table{
    width: 100%;
    border-collapse: collapse;

}
.table thead {
    background-color: rgb(241, 161, 0);

}
.table thead tr th{
    font-size: 14px;
    font-weight: medium;
    letter-spacing: 0.35px;
    color: white;
    opacity: 1;
    font-weight: 600;
    padding: 12px;
    vertical-align: top;
    border: 1px solid #dee2e685;
}
.table tbody tr td{
    font-size: 14px;
    letter-spacing: 0.35px;
    font-weight: normal;
    color:#f1f1f1;
    background-color: #3c3f44;
    padding: 8px;
    text-align: center;
    border: 1px solid #dee2e685;

}

.table tbody tr td .btn {
    width: 130px;
    text-decoration: none;
    line-height: 35px;
    display: block;
    background-color:rgb(241, 161, 0);
    font-weight: medium;
    color: white;
    text-align: center;
    user-select: none;
    border: 1px solid transparent;
    font-size: 14px;
    opacity: 1;
}
@media (max-width:768px) {
    .table thead{
        display: none;

    }
    .table, .table tbody ,.table tr ,.table td{
        display: block;
        width: 100%;
    }
    .table tr{
        margin-bottom: 15px;
    }
    .table tbody tr td{
        text-align: right;
        padding-left: 50%;
        position: relative;
    }
    .table td:before{
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left:15px;
        font-weight: 600;
        font-size: 14px;
        text-align: left;
    }
}
a.button_to_send_money{
    text-decoration: none;
    color: white;
    background-color: rgb(241, 161, 0);
    border-radius: 5px;
    padding: 5px;
    margin: 10px;

}
a.button_to_send_money1{
    text-decoration: none;
    color: white;
    background-color: rgb(241, 48, 0);
    border-radius: 5px;
    padding: 5px;
    margin: 10px;

}
.button_to_transfer{
    text-decoration: none;
    color: white;
    margin: 10px;
    padding: 5px;

}
    </style>
</head>
<body>
    <div class="hero">
        <img src="Images/old-black-background-grunge-texture-dark-wallpaper-blackboard-chalkboard-room-wall.jpg" alt="Background image" class="backimage">
        
        <nav>
            <img src="images/Picsart_22-10-06_07-53-57-458.png" class="logo" alt="Logo">
            <ul>
                <li><a href="index.html" class="hover-line">HOME</a></li>
                <li><a href="create-account.html" class="hover-line">CREATE USER</a></li>
                
                <li><a href="user_history.php" class="hover-line">USER HISTORY</a></li>
                <li><a href="about_us.html" class="hover-line" target="blank">ABOUT US</a></li>
            </ul>
        </nav>
        
        <div class="table-container">
            <h1 class="heading">USERS</h1> 
            <table class="table" id="display">
                <thead>
                    <tr>
                        
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ACCOUNT NUMBER</th>
                        <th>ACCOUNT &nbsp;BALANCE</th>
                        <th>ACTION</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $query="SELECT * FROM `user`";
                        $result=mysqli_query($connection,$query);
                        if($result){
                            if(mysqli_num_rows($result)>0){
                               while( $row=mysqli_fetch_assoc($result)){
                                $NAME=$row['NAME'];
                                $EMAIL=$row['EMAIL'];
                                $ID=$row['ID'];
                                $ACCOUNT_BALANCE=$row['ACCOUNT_BALANCE'];
                        
                        
                        ?>
                        <td><?php echo $NAME  ?></td>
                        <td><?php echo $EMAIL  ?></td>
                        <td><?php echo $ID  ?></td>
                        <td><?php echo $ACCOUNT_BALANCE  ?></td>
                        <td class="button_to_transfer">
                            <a class="button_to_send_money" href="send_money.php?=<?php echo $row['ID'] ?>">SEND MONEY</a>
                            <a class="button_to_send_money1" href="delete.php?id=<?php echo $row['ID'] ?>">DELETE USER</a>
                        </td>
                        

                    </tr>
                    <?php
                           }
                        }
                    
                    }
                    else{
                        echo mysqli_error($connection);
                    }
                    ?>
                </tbody>
               <tbody>
                <?php


                ?>
               </tbody>
            </table>
            
        </div>





        
        <div class="footer">
            &copy; Copy rigt made by Shivam Bhaumik - <a href="https://www.thesparksfoundationsingapore.org/" target="blank">The spark Foundation</a>
        </div>
        
    </div>
</body>
</html>