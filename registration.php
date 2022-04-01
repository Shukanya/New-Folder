<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration-style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>








  <body>
  <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-50 my-auto p-0" >
                    
                <div class="card-header text-center">
                    Registration Form
                </div>
                <div class="card-body">

                    <form  class="" action="" method="post" autocomplete="off">
                   
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control"  name="name" required value="" >
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control"  name="username" required value="" >
                        </div> 

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required value="">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"  required value="">
                        </div>

                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword" required value="">
                        </div><br>
                        <input type="submit" name="submit" class="btn btn-primary w-100"><br><br> 
                        <a href="login.php ">Login</a>
                    </form>
                </div>
                <div class="card-footer w-100">
                <small>&copy; Smart Attendance Management</small>
<br><br>  

            </div>
        </div>
    </div>
  </body>
</html>
