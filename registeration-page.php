<?php  include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
    <title>ثبت‌نام در رویداد</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="./registeration-system.css">
        <link rel="icon" type="image/png" href="logo.png">
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>فرم ثبت‌نام رویداد</h2>
        </div>
 
        <form action="registeration-page.php" method="POST">
        <input type="hidden" name="submited" value="true" />
        <?php
    if(isset($_REQUEST['submited'])):?>

        <?php  include('errors.php') ?>
        <?php endif ?>
            <div>

                <label for="username">نام کاربری:</label>
                <input type="text" name="username" required>

            </div>
             <div>

                <label for="email">ایمیل:</label>
                <input type="email" name="email" required>

            </div>      
             <div>

                <label for="password">رمز عبور:</label>
                <input type="password" name="password_0" required>

            </div>                      
             <div>

                <label for="password">تکرار رمز عبور:</label>
                <input type="password" name="password_1" required>

            </div> 
             <div>

                <label for="school">مدرسه:</label>
                <input type="text" name="school" required>

            </div> 

            <div>

                <label for="fname">نام:</label>
                <input type="text" name="fname" required>

            </div>  

            <div>

                <label for="lname">نام خانوادگی:</label>
                <input type="text" name="lname" required>

            </div>  

            <div>

                <label for="phonenumber">شماره تماس:</label>
                <input type="text" name="phonenumber" required>

            </div>  
            <button type="submit" name="register-user">ثبت‌نام</button>
            <p>قبلا ثبت‌نام کرده‌اید؟ <a href="login.php"><b>وارد شوید</b></a></p>

                
        </form>
    </div>
</body>

</html>