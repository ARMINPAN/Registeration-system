<?php

session_start();


/////////vars
$username = "";
$email = "";
$password_0 = "";
$password_1 = "";
$school = "";
$fname = "";
$lname = "";
$phonenumber = "";


///////connecting

$data_b = mysqli_connect('localhost','root','','krbbh-login-system') or die("could not connect to Database");

//////registering
if(isset($_REQUEST['submited'])){
    $username = mysqli_real_escape_string($data_b, $_POST['username']);
    $email = mysqli_real_escape_string($data_b, $_POST['email']);
    $password_0 = mysqli_real_escape_string($data_b, $_POST['password_0']);
    $password_1 = mysqli_real_escape_string($data_b, $_POST['password_1']);
    $school = mysqli_real_escape_string($data_b, $_POST['school']);
    $fname = mysqli_real_escape_string($data_b, $_POST['fname']);
    $lname = mysqli_real_escape_string($data_b, $_POST['lname']);
    $phonenumber = mysqli_real_escape_string($data_b, $_POST['phonenumber']);
}


//////////check the boxes not to be empty


/////////errors
$errors = array();

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_0)) {array_push($errors, "Password is required");}
if($password_0 != $password_1) {array_push($errors, "Passwords do not match");}
if(empty($school)) {array_push($errors, "School name is required");}
if(empty($fname)) {array_push($errors, "First Name is required");}
if(empty($lname)) {array_push($errors, "Last Name is required");}
if(empty($phonenumber)) {array_push($errors, "Phonenumber is required");}


/////////////////check if there is a same username exist in the server or same email or same Name or same number
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' or phonenumber = '$phonenumber' LIMIT 1";

$results = mysqli_query($data_b, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user['username'] === $username){array_push($errors, "username already exist");}
    if($user['email'] === $email){array_push($errors, "This email has been used before");}
    if($user['phonenumber'] === $phonenumber){array_push($errors, "This number has been used before");}
}

/////////////////////// finish the sign up (unless there is no errors)
if(count($errors) == 0){
    $passwword = md5($password_0);
    $query = "INSERT INTO user (username ,email ,password ,phonenumber ,school ,fname ,lname) VALUES ('$username', '$email', '$passwword', '$phonenumber', '$school', '$fname', '$lname')";
    mysqli_query($data_b,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Registered successfully and you`re logged in now";

    header('location: personalpage.php');
    
}
//////////////////////////registering finished


/////////////////////////loging in

if(isset($_POST['login-user'])){
    $username = mysqli_real_escape_string($data_b, $_POST['username']);
    $password = mysqli_real_escape_string($data_b, $_POST['password']);

if(empty($username)){
    array_push($errors,"username is required");
}

if(empty($password)){
    array_push($errors,"password is required");
}

if(count($errors) == 0){
    $password = md5($password);
}
$query = "SELECT * FROM user WHERE username = '$username' AND password ='$password' ";
$results = mysqli_query($data_b,$query);
if(mysqli_num_rows($results)){
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You`re logged in now";
    header('location : personalpage.php');
}
else{
    array_push($errors,"username and password doesn`t match,please try again.");
}
}
?>
