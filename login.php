<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  <body>
  <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto p-0" >
                    
                <div class="card-header text-center">
                    Login
                </div>
                <div class="card-body">
                <form class="" action="" method="post" autocomplete="off">

                <div class="form-groups">
                  <label for="text">Username or Email : </label>
                  <input type="text"  class="form-control" name="usernameemail" required value="">
                  <label for=""></label>
                </div>
 
                <div class="form-groups">
                  <label for="password">Password</label>
                  <input type="password" class="form-control"  name="password" required value="">
                  <label for=""></label>
                  </div>
                <input type="submit" class="btn btn-primary w-100" name="submit" value="Login"></button> <br><br>
                <a href="registration.php">Register</a>
              </form>
              </div>
                <div class="card-footer w-100">
                <small>&copy; Smart Attendance Management</small>
            </div>
        </div>
    </div>
            </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>




