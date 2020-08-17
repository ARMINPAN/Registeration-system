<?php 
    include('server.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>ثبت‌نام در رویداد</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="./login.css">
        <link rel="icon" type="image/png" href="logo.png">
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>صفحه ورود</h2>
        </div>
        
        <form action="registeration-page.php" method="POST">
            <div>

                <label for="username">نام کاربری:</label>
                <input type="text" name="username" required>

            </div>      
             <div>

                <label for="password">رمز عبور:</label>
                <input type="password" name="password__0" required>

            </div>                      

            
            <button type="submit" name="login-user">ورود</button>
            <p>هنوز ثبت‌نام نکرده‌اید؟ <a href="registeration-page.php"><b>ثبت‌نام</b></a></p>
        </form>
    </div>
</body>

</html>