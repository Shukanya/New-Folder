<?php
require 'function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendance Record</title>
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Quicksand;
}
body {
    width: 100%;
    height: 100vh;
    background:linear-gradient(to right top,#b597f6,#439cfb);
    display: flex;
    justify-content: center;
    align-items: center;
}
.main {
    width: 25%;
    height: 70%;
    padding: 50px 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #fff;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.5);
    border-radius: 5px;
}
.main p {
    font-size:3rem
}
.main .input {
    width: 90%;
    padding: 10px 25px;
    border: 3px solid #9e9e9e;
    outline: none;
    margin: 15px 0;
}
.main .input:focus {
    border: 3px solid #439cfb;
}
.btn ,.input {
    font-size:1.1rem;
    border-radius: 5px;
}
.main .btn {
    width: 90%;
    padding: 12px 0;
    outline: none;
    border:none;
    border-radius: 5px;
    background: #439cfb;
    color: #fff;
    transition: 0.3s;
    margin: 0 0 25px 0;
}
.main .code {
    margin: 25px 0;
}
.main .btn:hover {
    box-shadow: 0 10px 25px -10px #439cfb;
}
.main #note {
    font-size: 1.2rem;
    font-family: 'Courier New', Courier, monospace;
}
#toast {
    position: absolute;
    bottom: 0;
    border-radius: 5px;
    padding: 15px 50px;
    background: #07f49e;
    opacity: 0;
    visibility: hidden;
    box-shadow: 0 10px 25px -10px #07f49e;
    transition: 0.3s;
}
#toast.show {
    visibility: visible;
    opacity: 1;
    bottom: 50px;
}
    </style>
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate your Login Credentials</title>
    <link rel="shoertcut icon" href="Images/favicon.png">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="main">
        <p>Welcome <?php echo $user["name"]; ?></p>
        <input type="text" class="input">
        <button class="btn">Generate</button>
        <img src="Images/default.png" alt="Your QR code will show here" class="code">
        <p id="note">Scan Here</p> <br><br>
       <a href="logout.php">Logout</a>
    </div>
    <div id="toast">Successfully Generated
   </div>
    <script src="main.js"></script>
    


</body>
</html>
