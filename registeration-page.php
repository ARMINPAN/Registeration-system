<?php  include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign-up page</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="logo.png">
</head>

<body style="font-family: FS Albert Arabic Web Regular;">
    <div class="container">
        <div class="header">
            <h2>Sign-up form</h2>
        </div>
 
        <form action="registeration-page.php" method="POST">
        <input type="hidden" name="submited" value="true" />
        <?php
    if(isset($_REQUEST['submited'])):?>

        <?php  include('errors.php') ?>
        <?php endif ?>
            <div>

                <label for="username">Username:</label>
                <input type="text" name="username" required>

            </div>
             <div>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

            </div>      
             <div>

                <label for="password">Password:</label>
                <input type="password" name="password_0" required>

            </div>                      
             <div>

                <label for="password">Retype password:</label>
                <input type="password" name="password_1" required>

            </div> 
             <div>

                <label for="school">School:</label>
                <input type="text" name="school" required>

            </div> 

            <div>

                <label for="fname">First-Name:</label>
                <input type="text" name="fname" required>

            </div>  

            <div>

                <label for="lname">Last-Name:</label>
                <input type="text" name="lname" required>

            </div>  

            <div>

                <label for="phonenumber">Phone-number:</label>
                <input type="text" name="phonenumber" required>

            </div>  
            <button type="submit" name="register-user">Sign-up</button>
            <p>Already a member? <a href="login.php"><b>Sign-in</b></a></p>

                
        </form>
    </div>
</body>

</html>