<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND MONEY</title>
    <style>
        @font-face {
            font-family:myFont1;
            src: url(Fonts/jakusty.regular.ttf);
        }
        @font-face {
            font-family: myFont2;
            src: url(Fonts/adam-cg-pro.regular.ttf);
        }
    </style>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
    <div class="hero">
        
        <img src="Images/old-black-background-grunge-texture-dark-wallpaper-blackboard-chalkboard-room-wall.jpg" alt="" class="backimage">

        <nav>
            <img src="images/Picsart_22-10-06_07-53-57-458.png" class="logo" alt="Logo">
            <ul>
                <li><a href="index.html" class="hover-line">HOME</a></li>
                <li><a href="create-account.html" class="hover-line">CREATE USER</a></li>
                <li><a href="users.php" class="hover-line">USERS</a></li>
                <li><a href="user_history.php" class="hover-line">USER HISTORY</a></li>
                <li><a href="about_us.html" class="hover-line" target="blank">ABOUT US</a></li>
            </ul>
        </nav>
        <br>
        <br><br>
        <form action="insert35.php" method="post">
            
        <fieldset>
            <legend><img src="Images/Picsart_22-10-06_07-53-57-458.png" alt="Logo" class="logo"></legend>
            <h3>SEND MONEY</h3>
            <br>
            <br>
           <input type="number" name="S_ID" id="S_ID" placeholder="SENDER ACCOUNT NUMBER" required>
           <input type="number" name="CASH" id="CASH" placeholder="AMMOUNT" required>
           <input type="number" name="R_ID" id="R_ID"placeholder="RECEIVER ACCOUNT NUMBER" required>
           <button type="submit" name="register_btn" class="button_SEND"><b> SEND </b></button>
           
        </fieldset>
        

    </form>
   

    
        <div class="footer">
            &copy; Copy rigt made by Shivam Bhaumik - <a href="https://www.thesparksfoundationsingapore.org/" target="blank">The spark Foundation</a>
        </div>
        
    </div>
    
    
</body>
</html>