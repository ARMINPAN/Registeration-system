<?php

session_start();


/////////vars
$username = "";
$email = "";

/////////errors
$errors = array();

///////connecting

$data_b = mysqli_connect('localhost','root','','krbbh-login-system') or die("could not connect to Database");

//////registering
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_0 = mysqli_real_escape_string($db, $_POST['password_0']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$phonenumber = mysqli_real_escape_string($db, $_POST['phonnumber']);
$school = mysqli_real_escape_string($db, $_POST['school']);
$fname = mysqli_real_escape_string($db, $_POST['fname']);
$lname = mysqli_real_escape_string($db, $_POST['lname']);

//////////check the boxes not to be empty

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_0)) {array_push($errors, "Password is required");}
if($password_0 != $password_1) {array_push($errors, "Passwords do not match");}
if(empty($phonenumber)) {array_push($errors, "Phonenumber is required");}
if(empty($school)) {array_push($errors, "School name is required");}
if(empty($fname)) {array_push($errors, "First Name is required");}
if(empty($lname)) {array_push($errors, "Last Name is required");}


/////////////////check if there is a same username exist in the server or same email or same Name or same number
$user_check_query = "SELECT = FROM user WHERE username = '$username' or email = '$email' or fname = '$fname' or lname = '$lname' or phonenumber = '$phonenumber' LIMIT 1";

$results = mysqli_query($data_b,$user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user['username'] === $username){array_push($errors, "username already exist");}
    if($user['email'] === $email){array_push($errors, "This email has been used before");}
    if($user['phonenumber'] === $phonenumber){array_push($errors, "This number has been used before");}
    if($user['fname'] === $fname and $user['lname'] === $lname ){array_push($errors, "Somebody with this name has signed up before");}
}

/////////////////////// finish the sign up (unless there is no errors)
if(!count($errors)){
    $password = md5($password_0);
    $query = "INSERT INTO user (Username ,Email ,Password, Phone-number ,School ,First-name ,Last-name) VALUES ('$username', '$email', '$password', '$phonenumber', '$school', '$fname', '$lname')";
    mysqli_query($data_b,$qyery);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Registered successfully and you`re logged in now";
    header('location: personalpage.php')
    
}

?>
