<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            background-color: azure;
        }

        h1 {
            display: flex;
            justify-content: center;
        }

        h5 {
            margin-bottom: 5px;
        }

        .container1 {
            width: 100%;
            height: 50px;
            margin: 30px 0 30px 0;
            padding: 20px;

        }

        .container2 {
            width: 100%;
            height: 50px;
            margin: 30px 0 30px 0;
            padding: 20px;

        }

        .container3 {
            width: 100%;

            margin: 30px 0 30px 0;
            padding: 20px;
        }

        .container4 {
            width: 100%;
            margin: 30px 0 30px 0;
            padding: 20px;
        }

        .container5 {
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .container6 {
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .container7 {
            width: 100%;
            height: auto;
            padding: 20px;
        }
        .container8 {
            width: 100%;
            height: auto;
            padding: 20px;
        }
        .container9 {
            width: 100%;
            height: auto;
            padding: 20px;
        }
        .container10 {
            width: 100%;
            height: auto;
            padding: 20px;
        }
        .container11 {
            width: 100%;
            height: auto;
            padding: 20px;
        }
        .button {
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .btn {
            background-color: lightskyblue;
            color: black;
            border: solid;
            border-radius: 10px;
            padding: 5px;
            margin-top: 10px;
            min-height: 10px;
            min-width: 30px;
        }

        .btn:hover {
            background-color: aliceblue;
        }

        .password {
            border: solid lightgray;
            border-radius: 7px;
            width: 200px;
            height: 20px;
            margin-bottom: 20px;
            padding: 2px 0px;
        }

        .home-page {
            margin: 0 auto 100px 20px;
            text-decoration: none;
            color: blueviolet;
        }
    </style>
</head>

<body>
    <div class="logo">
        <img width="120px" class="logo" src="logo2.png" alt="logo">
    </div>
    <h1>Edit your profile here</h1>
    <div class="container">
      <div class="form-div">
        <form action="welcome3.php" method="post">
            <div class="container1">
                <label class="resume" for="resume">
                    <h3>Upload Resume</h3>
                </label>
                <input type="file" name="resume" id="resume">
            </div>
            <div class="container2">
                <label class="picfile" for="picfile">
                    <h3>Upload Profile picture</h3>
                </label>
                <input type="file" name="picfile" id="picfile">
            </div>
            <div class="container3">
                <h3>Change Your Password</h3>
                <label for="password">Old Password</label><br>
                <input class="password" type="password" name="password"><br>
                <label for="password">New Password</label><br>
                <input class="password" type="password" name="password"><br>
                <label for="password">Confirm New Password</label><br>
                <input class="password" type="password" name="password"><br>
            </div>
            <div class="container4">
                <h3>Upload Your Marksheets</h3>
                <label class="SSC-marksheet" for="SSC-marksheet">
                    <h5>Upload SSC Marksheet</h5>
                </label>
                <input type="file" name="SSC-marksheet" id="SSC-marksheet">  <!--enctype="multipart/form-data"-->
                <label class="HSC-marksheet" for="HSC-marksheet">
                    <h5>Upload HSC Marksheet</h5>
                </label>
                <input type="file" name="HSC-marksheet" id="HSC-marksheet">
                <label class="Degree" for="Degree">
                    <h5>Upload Degree</h5>
                </label>
                <input type="file" name="Degree" id="Degree">
            </div>
            <div class="container5">
                <h3>Add Skills</h3>
                <textarea name="skills" id="skill" cols="30" rows="10"></textarea>
            </div>
            <div class="container6">
                <h3>Write About Yourself</h3>
                <textarea name="about" id="about" cols="30" rows="10"></textarea>
            </div>
            <div class="container7">
                <label class="DOB" for="DOB">
                    <h3>Date of Birth</h3>
                </label>
                <input type="date" name="DOB" id="DOB">
            </div>
            <div class="container8">
            <label class="username" for="username">
            <input class="username" name="username" type="text" id="username" placeholder="user name">
            </label>
            </div>
            <div class="container9">
            <label class="email" for="email">
            <input class="email" name="email" type="email" id="email" placeholder="email">
            </label>
            </div>
            <div class="container10">
            <label class="contact" for="contact">
            <input class="contact" name="contact" type="number" id="contact" placeholder="contact">
            </label>
            </div>
            <div class="container11">
                <h3>Tell me your Address</h3>
                <textarea name="address" id="address" cols="30" rows="10"></textarea>
            </div>
            <div class="button">
                <button type="submit" name="submit" class="btn btn-primary">Submit Changes</button>
            </div>
        </form>
      </div>
    </div>    

</body>

</html>