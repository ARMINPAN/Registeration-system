<?php  include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
    <title>Login-page</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="logo.png">
</head>

<body style="font-family: FS Albert Arabic Web Regular;">
    <div class="container">
        <div class="header">
            <h2>Login page</h2>
        </div>
        
        <form action="login.php" method="POST" name="loged">
        <?php
    if(isset($_REQUEST['loged'])):?>

        <?php  include('errors.php') ?>
        <?php endif ?>
            <div>

                <label for="username">Username:</label>
                <input type="text" name="username" required>

            </div>      
             <div>

                <label for="password">Password:</label>
                <input type="password" name="password" required>

            </div>                      

            
            <button type="submit" name="login-user">Sign-in</button>
            <p>Not a member yet?! <a href="registeration-page.php"><b>Sign-up</b></a></p>
        </form>
    </div>
</body>

</html>
