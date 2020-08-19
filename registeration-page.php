<?php  include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign-up page</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="stylesheet" type="text/css" href="./registeration-systemm.css">
</head>

<body style="font-family: FS Albert Arabic Web Regular;">
<!-- <img class="imge" src="register-back.jpg"> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>


    <div class="container">
        <div class="header">
            <h1>Sign-up form</h1>
        </div>
 
        <form action="registeration-page.php" method="POST">
        <input type="hidden" name="submited" placeholder="true" />
        <?php
    if(isset($_REQUEST['submited'])):?>

        <?php  include('errors.php') ?>
        <?php endif ?>
            <div>
                <input type="text" name="username" placeholder="Username" required>
            </div>

             <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>  

             <div>
                <input type="password" name="password_0" placeholder="Password" required>
            </div> 

             <div>
                <input type="password" name="password_1" placeholder="Retype Password" required>
            </div> 

             <div>
                <input type="text" name="school" placeholder="School-Name" required>
            </div> 

            <div>
                <input type="text" name="fname"  placeholder="First-Name" required>
            </div>  

            <div>
                <input type="text" name="lname" placeholder="Last-Name" required>
            </div>  

            <div>
                <input type="text" name="phonenumber" placeholder="Phone-number" required>
            </div>  
            <button type="submit" name="register-user">Sign-up</button>
            <p><a href="login.php"><b> Already a member? Sign-in</b></a></p>

                
        </form>
    </div>
</body>

</html>