<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            background-color: azure;
        }

        h3 {
            margin: 30px 0 0 0;
        }
        h5 {
            margin: 0 0 0 0;
        }
        .container1 {
            display: flex;
            justify-content: space-between;
        }
        .container2 {
            display: flex;
            justify-content: space-between;
        }
        .container3 {
            display: flex;
            justify-content: space-between;
        }
        .logo {
            background-color:antiquewhite;
            width: 10rem;
            height: 10rem;
            padding: 10px;
            border-radius: 10px;
        }
        .user-image {
            background-color:antiquewhite;
            width: 10rem;
            height: 10rem;
            padding: 10px;
            border-radius: 10px;
        }
        .upload-button {
            text-decoration: none;
            color: rgb(231, 125, 125);
            margin: 20px 0 20px 0;
        }
        .button {
            margin: 20px 0 20px 0;
        }
        .skill-button {
            margin: 0 100px 10px 0;
        }
        .log-out {
            text-decoration: none;
            color: red;
        }
        .marksheet {
            display: flex;
            justify-content: space-evenly;
            width: 60%;
        }
    </style>
</head>
<body>
   <div class="container1">
    <div class="logo">
        <img class="logo" src="logo2.png" alt="logo">
    </div>
    <div class="user-image">
        <img width="159px" src="dummy-profile.png" alt="dp">
    </div>
   </div> 
   <div class="container2"> 
    <div class="edit-profile">
        <h3><span>Edit profile<span></span></h3>
        <a href="welcome.php" target="_blank">
            <img src="edit-button.png" alt="edit-button">
        </a>
    </div>
    <div class="logout">
    <h3>Welcome : <?php
         $conn = mysqli_connect('localhost','root');
           mysqli_select_db($conn, 'login');

         if(isset($_POST['submit'])){
          $username = $_POST['username'];
          print_r($username);
            echo "<br>";
         }
    ?>    </h3>
    <a class="log-out" href="logout.php" target="_blank"><h3>Log Out</h3></a>
    </div>
    </div>
    <div class="about">
        <h3>About</h3>
        <textarea name="about" id="about" cols="100" rows="10"><?php
        $conn = mysqli_connect('localhost','root');
        mysqli_select_db($conn, 'login');

        if(isset($_POST['submit'])){
            $about = $_POST['about'];
            print_r($about);
        }
         ?></textarea>
    </div>
    <div class="DOB">
        <h3>DOB  :        <?php
        $conn = mysqli_connect('localhost','root');
        mysqli_select_db($conn, 'login');

        if(isset($_POST['submit'])){
            $DOB = $_POST['DOB'];
            print_r($DOB);
        }
         ?></h3>
    </div>
    <div class="address">
        <h3>ADDRESS  :<?php
        $conn = mysqli_connect('localhost','root');
        mysqli_select_db($conn, 'login');

        if(isset($_POST['submit'])){
            $address = $_POST['address'];
            print_r($address);
        }
         ?></h3>
    </div>
    <div class="email">
        <h3>EMAIL  :<?php
        $conn = mysqli_connect('localhost','root');
        mysqli_select_db($conn, 'login');

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            print_r($email);
        }
         ?></h3>
    </div>
    <div class="contact">
        <h3>CONTACT  :<?php
        $conn = mysqli_connect('localhost','root');
        mysqli_select_db($conn, 'login');

        if(isset($_POST['submit'])){
            $contact = $_POST['contact'];
            print_r($contact);
        }
         ?></h3>
    </div>
    <h3>MARK-SHEETS  :</h3>
    <div class="marksheet">
        
        <div class="ssc">
            <img width= "150px" src="ssc-marksheet.png" alt="SSC-marksheet">
        </div>
        <div class="hsc">
            <img width= "150px" src="hsc-marksheet.png" alt="HSC-marksheet">
        </div>
        <div class="degree">
            <img width= "150px" src="degree-marksheet.png" alt="Degree-marksheet">
        </div>
    </div>
    <div class="button">
        <a class="upload-button" href="welcome.php" target="_blank">UPLOAD MARKSHEET</a>
    </div>
    <div class="container3">
        <div class="skills">
            <h3>SKILLS  :<?php
        $conn = mysqli_connect('localhost','root');
        mysqli_select_db($conn, 'login');

        if(isset($_POST['submit'])){
            $skills = $_POST['skills'];
            print_r($skills);
        }
         ?></h3>
        </div>
        <div class="skill-button">
            <a href="welcome.php" target="_blank">
                <img src="skill-button.png" alt="skill-button" height="35px">
            </a>
            <h5><span>Add Skills<span></span></h5>
        </div>
    </div>

</body>
</html>

