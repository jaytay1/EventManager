<?php
  include_once 'connect.php';

  session_start();

  if(isset($_POST['submit']))
  {
    $_SESSION['user'] = htmlentities($_POST['username']);
    header('Location: home.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
</head>

<body>
    <!--Nav bar with project name-->
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">University Event Manager</span>
        <a class="nav-item nav-link active float-right" id="newUserLink" href="register.php">Create New User</a>
    </nav>




    <!--Username and password form-->
    <div id="formContainer" class="container content">
        <div class="row justify-content-center">
            <form id="loginForm" method="post">
                <div class="form-group row ">
                    <label class="col-form-label col-lg-2 col-sm-3 col-md-4" for="inputUserName">Username</label>
                    <input name="username" type="username" class="form-control col-lg-10 col-sm-9 col-md-8" id="inputUserName" aria-describedby="userNAmeHelp"
                        placeholder="Enter Username" required="">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2 col-sm-3 col-md-4" for="inputPassword">Password</label>
                    <input name="password" type="password" class="form-control col-lg-10 col-sm-9 col-md-8" id="inputPassword" placeholder="Password"
                        required="">
                </div>
                <div class="clearfix">
                    <button id="loginButton" name='submit' type="submit" class="btn btn-primary btn-sm login-submit float-left">Login</button>
                    <a class="float-right" id="forgotPasswordLink" href="{{ url_for('password') }}">Forgot Password</a>
                </div>

                <!-- warning messages wrong login credentials-->
                <div id="loginAlert" class="alert alert-danger clearfix" role="alert">
                    Incorrect Login Credentials
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>
