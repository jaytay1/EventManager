<?php
  include_once 'connect.php';
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="main.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <title>Create RSO</title>
</head>

<body>
    <!--Nav bar with new user heading-->
    <nav class="navbar  navbar-dark bg-dark">
        <a class="nav-item nav-link float-left" href="index.html">Home</a>
        <a class="nav-item nav-link float-right" href="logout.html">Log Out</a>
    </nav>





    <!--rso  form-->
    <div id="formContainer" class="container">
        <div class="row justify-content-center">
            <form action="createNewRSO.php" method="post">
                <div class="form-group">
                    <label for="inputTitle">RSO Title</label>
                    <input name="rso_name" type="text" class="form-control" id="rsoTitle" placeholder="Tech Club" required="">
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="university">University</label>
                        <select name="rso_university" id="university" class="form-control" required="">
                            <option selected>Choose...</option>
                            <option>University of Central Florida</option>
                            <option>University of Florida</option>
                            <option>University of Miami</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="rsoType">RSO Type</label>
                        <select name="rso_type" id="rsoType" class="form-control" required="">
                            <option selected>Choose...</option>
                            <option>Social</option>
                            <option>Fundraising</option>
                            <option>Tech Talks</option>
                            <option>Career</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="rsoDescription">RSO Description</label>
                        <textarea name="rso_description" class="form-control" id="rsoDescription" rows="3" required=""></textarea>
                    </div>
					             <p><b>Enter in the 5 students who will be creating this RSO</b></p><br />
					          <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="adminEmail">Admin Email (yourself)</label>
                        <textarea name="email_1" class="form-control" id="Admin Email" rows="1" required=""></textarea>
                    </div>
					          <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="student2Email">Student 2 Email</label>
                        <textarea name="email_2" class="form-control" id="student1Email" rows="1" required=""></textarea>
                    </div>
					          <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="student3Email">Student 3 Email</label>
                        <textarea name="email_3" class="form-control" id="student3Email" rows="1"required=""></textarea>
                    </div>
					          <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="student4Email">Student 4 Email</label>
                        <textarea name="email_4" class="form-control" id="student4Email" rows="1" required=""></textarea>
                    </div>
					          <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="student5Email">Student 5 Email</label>
                        <textarea name="email_5" class="form-control" id="student5Email" rows="1" required=""></textarea>
                    </div>
                </div>
                <button id="createRSOBtn" name="submit" type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

</body>

</html>
