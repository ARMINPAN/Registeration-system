
<?php

session_start();

if(!isset($_SESSION['username'])){
    echo $_SESSION['msg'] = "you must log in first,to view this page.";
    header('location: login.php');
}
if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>صفحه شخصی رویداد</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="./personalpage.css">
        <link rel="icon" type="image/png" href="logo.png">
</head>

<body>

    <h1>Personal page</h1>
    <?php
    if(isset($_SESSION['success'])):?>

    <div class="error success">
        <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif?>

<!-- //////////user infos -->
<?php if(isset($_SESSION['username'])):?>
    <h3 class="texts">
        welcome
        <strong>
        <?php
            echo $_SESSION['username'];
        ?>
        </strong>
    </h3>

    <button><a href="personalpage.php?logout=1">logout</a></button>

    <?php endif?>

</body>
</html>