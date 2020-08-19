


<!DOCTYPE html>
<html>
<head>
    <title>Login-page</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="stylesheet" type="text/css" href="./login.css">
</head>

<body style="font-family: FS Albert Arabic Web Regular;">


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

    <div class="container">
        <div class="header">
            <h2>Login page</h2>
        </div>
        
        <form action="login.php" method="POST" name="loged">
            <div>
                <input type="text" name="username" placeholder="Username" required>
            </div>   

             <div>
                <input type="password" name="password"  placeholder="Password" required>
            </div>                      

            <button type="submit" name="login-user">Sign-in</button>
            <p><a href="registeration-page.php"><b>Not a member yet?! Sign-up</b></a></p>

        </form>
        <div class="error">
    <?php  include('server.php') ?>
        </div>
    </div>

</body>

</html>
