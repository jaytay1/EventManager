<?php
  include_once 'connect.php';


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <title> <?php echo $rsoName; ?> </title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Create Event</a>
          </li>
        </ul>
        <div class="mt-2 mt-md-0">
          <a class="nav-item nav-link float-right" href="{{ url_for('login') }}">Log Out</a>
        </div>
      </div>
    </nav>
  </header>



  <main role="main">

     <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
<<<<<<< HEAD
        <h1 class="display-3">Knight Hacks</h1>
        <p>The mission of Knight Hacks is to promote creativity within the Computer Science and Engineering community by planning
          and executing “Hackathons”, which is defined as an event in which teams of developers, designers and project managers
          collaborate to produce a software or hardware product in a set amount of time. We also hold workshops throughout
          the year to give hands on experience with different technologies to attendees.
        </p>
=======
        <h1 class="display-3"><?php $rsoName = $_GET['rsoName']; echo $rsoName; ?></h1>
        <p>RSO DESCRIPTION HERE. This is a template for a simple marketing or informational website. It includes a large callout
          called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more
          unique.</p>
		  <p>
            <a class="btn btn-secondary" role="button">Join RSO &raquo;</a>

          </p>
>>>>>>> d899e3330187a93c208be1fb1fbc7dbd3f81f7f8
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Event Title</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
            nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio
            dui. </p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
          </p>
        </div>
        <div class="col-md-4">
          <h2>Event Title</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
            nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio
            dui. </p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
          </p>
        </div>
        <div class="col-md-4">
          <h2>Event Title</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis
            euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
            sit amet risus.</p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a>

          </p>
        </div>
      </div>

      <hr>

    </div>

  </main>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>


</body>

</html>
