<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User sign-up</title>
    <style>
        body{
            background-color:azure;
        }
        h1 {
            display: flex;
            justify-content: center;
        }

        .container2 {
            position: relative;
            width: 50%;
            margin: 0px auto 10% auto;
            border: solid lightgray;
            background-color:blanchedalmond;
            display: flex;
            justify-content: center;
            padding: 40px 0px;
        }
        .name {
            border: solid lightgray;
            border-radius:7px;
            width: 95%;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }
        .username {
            border: solid lightgray;
            border-radius:7px;
            width: 95%;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }
        .email {
            border: solid lightgray;
            border-radius:7px;
            width: 95%;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }
        .contact {
            border: solid lightgray;
            border-radius:7px;
            width: 95%;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }
        .password {
            border: solid lightgray;
            border-radius:7px;
            width: 95%;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }
        .confirm_password {
            border: solid lightgray;
            border-radius:7px;
            width: 95%;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }
        .btn {
            background-color: lightskyblue;
            color: black;
            border:solid; 
            border-radius:10px; 
            padding:5px;
            min-height:15px; 
            min-width: 60px;
        }
        .btn:hover {
            background-color: aliceblue;
        }
        .button {
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="container1">
     <img width="120px" class="logo" src="logo2.png" alt="logo">
    </div>
    <h1 class="main_heading">USER SIGN-UP</h1>
<div class="container2">
    <form action="" method="post">
        <label for="name">Name</label>
        <input class="name" type="text">
        <br>
        <label for="username">User Name</label>
        <input class="username" name="username" type="text">
        <br>
        <label for="email">Email</label>
        <input class="email" type="email">
        <br>
        <label for="contact">Contact</label>
        <input class="contact" type="number">
        <br>
        <label for="password">Password</label>
        <input class="password" name ="password" type="password">
        <label for="confirm_password">Confirm Password</label>
        <input class="confirm_password" name ="confirm_password" type="password">
        <div class="button">
        <button type="submit" class="btn btn-primary">Sign up</button>
            <!--<input class="btn" type="button" value="sign up">--></div> 
    </form>
</div>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>