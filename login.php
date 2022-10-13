<?php
session_start();

if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        body{
            background-color:azure;
        }
        h1 {
            display: flex;
            justify-content: center;
        }
        h3 {
            display: flex;
            justify-content: center;
        }
        .container2 {
            position: relative;
            width: 40%;
            height: 300px;
            margin: 0px auto 0px auto;
            border: solid lightgray;
            background-color:blanchedalmond;
            display: flex;
            justify-content: center;
            padding: 40px 0px;
        }
        .username{
            border: solid lightgray;
            border-radius:7px;
            width: 15rem;
            height: 20px;
            margin: 20px 0px;
            padding: 2px 0px;
        }
        .password{
            border: solid lightgray;
            border-radius:7px;
            width: 15rem;
            height: 20px;
            margin: 20px 0px;
            padding: 2px 0px;
        }
        .sign-up{
            margin: 0 10px;
            text-decoration: none;
            color: red;
        }
        .btn{
            background-color: lightskyblue;
            color: black;
            border:solid; 
            border-radius:10px; 
            padding:5px;
            min-height:15px; 
            min-width: 60px;
        }
        .btn:hover{
            background-color: aliceblue;
        }
        .button{
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="container1">
     <img width="120px" class="logo" src="logo2.png" alt="logo"> 
    </div>
    <h1 class="main_heading">USER LOGIN</h1>
<div class="container2">
    <form action="" method="post">
        <input class="username" name="username" type="text" placeholder="user name">
        <br>
        <input class="password" name="password" type="password" placeholder="password">
        <h3><span>new user</span>
        <a class="sign-up" href="register.html" target="_blank">sign-up</a></h3>
        <div class="button">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
</body>
</html>