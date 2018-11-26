<?php
  include_once 'connect.php';

  session_start();

  $user = $_SESSION['user'];
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
  <!--feather icons-->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>

  <title>University Event Manager</title>
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <span class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">University Event Manager</span>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="login.php">Log out</a>
      </li>
    </ul>
  </nav>

  <!--contains everything but top nav-->
  <div class="container-fluid">
    <div class="row">

      <!-- side bar-->
      <nav id="sideBarNav" class="col-md-2  col-lg-2 col-sm-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column" role="navigation">
            <li class="nav-item">
              <a id="home-tab" class="nav-link active" href="#home" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">
                <span class="icon" data-feather="home"></span>
                Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <h6 style="margin-top: 4px !important;" class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>My Profile</span>
            </h6>
            <li class="nav-item">
              <a id="myEvents-tab" class="nav-link" href="#myEvents" data-toggle="tab" role="tab" aria-controls="myEvents" aria-selected="false">
                <span class="icon" data-feather="list"></span>
                My Events
              </a>
            </li>
            <li class="nav-item">
              <a id="myRSOs-tab" class="nav-link" href="queryRSO.php" aria-selected="false">
                <span class="icon" data-feather="layers"></span>
                My RSOs
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Events Manager</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a id="searchRSOsModalContainer-tab" class="nav-link" href="#searchRSOsModalContainer" data-toggle="modal" data-target="#searchRSOsModalContainer"
                role="tab" aria-selected="false">
                <span class="icon" data-feather="search"></span>
                Search RSO
              </a>
            </li>
            <li class="nav-item">
              <a id="searchEventsModalContainer-tab" class="nav-link" href="#searchEventsModalContainer" data-toggle="modal" data-target="#searchEventsModalContainer"
                role="tab" aria-selected="false">
                <span class="icon" data-feather="search"></span>
                Search Events
              </a>
            </li>
            <li class="nav-item">
              <a id="createRSO-tab" class="nav-link" href="createRSOPage.php" role="tab" aria-selected="false">
                <span class="icon" data-feather="plus"></span>
                Create RSO
              </a>
            </li>
            <li class="nav-item">
              <a id="createEvent-tab" class="nav-link" href="createEventPage.php" role="tab" aria-selected="false">
                <span class="icon" data-feather="plus"></span>
                Create Event
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!--tab content-->
      <div class="tab-content col-md-10 col-sm-10 ml-sm-auto col-lg-10" id="myTabContent">

        <!--home tab-->
        <div role="tabpanel" aria-labelledby="home-tab" class="col-md-12 col-sm-12 ml-sm-auto col-lg-12 tab-pane fade-in active"
          id="home">
          <!--Jumbo Tron-->
          <div role="tabpanel" class="jumbotron">
            <h1 class="display-3">Welcome! <?php echo $user; ?></h1>
            <p class="lead">To the University Event Manager. Using this webapp users can search, create, and view different types of events.
              These events are hosted by different types of Registered Student Organizations.</p>
            <hr class="my-4">
            <p>The left is the main navigation for this webapp. Here you can view events that you're following, view Registered
              Student Organizations you are apart of, search for different types of Register Student Organizations, search
              for different types of events, and apply to create a Register Student Organization.
            </p>
          </div>
        </div>

        <!-- my events tab-->
        <div role="tabpanel" aria-labelledby="myEvents-tab" class="tab-pane fade col-md-12 col-sm-12 col-lg-12" id="myEvents">

          <!-- event cards-->

          <div id="EventContainer" class="container-fluid rounded">
            <div id="eventCardDeck" class="card-deck">
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Guided Meditation</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Meditation Experience</h6>
                  <p class="card-text">Learn how to just be. This class for students and RWC members introduces the basics of meditating and offers
                    different guided meditations each week.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Internship Social</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Knight Hacks</h6>
                  <p class="card-text">Join us this Friday for an internship social! We'll have fellow Knights who have interned at various tech
                    companies present who are available for chatting about their experiences and sharing info on the application
                    process. It will be open room style so you can chat 1:1 or in groups with people who interned at different
                    companies. THERE WILL BE PIZZA AND DRINKS! </p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>

              </div>
              <div class="w-100 d-none d-md-block d-lg-none">
                <!-- wrap every 3 on md-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="w-100 d-none d-lg-block d-xl-none">
                <!-- wrap every 4 on lg-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-xl-block">
                <!-- wrap every 5 on xl-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>


              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="w-100 d-none d-md-block d-lg-none">
                <!-- wrap every 3 on md-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="w-100 d-none d-lg-block d-xl-none">
                <!-- wrap every 4 on lg-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-md-block d-lg-none">
                <!-- wrap every 3 on md-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Event title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Hosting</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>

              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>

              <div class="w-100 d-none d-xl-block">
                <!-- wrap every 5 on xl-->
              </div>
            </div>


          </div>
        </div>


        <!--my rso tab-->
        <div role="tabpanel" aria-labelledby="myRSOs-tab" class="tab-pane fade col-md-12 col-sm-12 col-lg-12" id="myRSOs">

          <div id="RSOContainer" class="container-fluid rounded">
            <div id="rsoCardDeck" class="card-deck">

              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Meditation Experience</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Health and Wellness</h6>
                  <p class="card-text">
                    By tuning in to our heart, we learn to be centered in our highest self. Strengthen that connection and cultivate an inner
                    knowing that wisely directs and guides our lives. Grow to face the challenges of life with courage and
                    acceptance. Live by the heart, and become what we’re meant to be
                  </p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">Knight Hacks</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Technology</h6>
                  <p class="card-text">The mission of Knight Hacks is to promote creativity within the Computer Science and Engineering community
                    by planning and executing “Hackathons”, which is defined as an event in which teams of developers, designers
                    and project managers collaborate to produce a software or hardware product in a set amount of time. We
                    also hold workshops throughout the year to give hands on experience with different technologies to attendees.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>

              </div>
              <div class="w-100 d-none d-md-block d-lg-none">
                <!-- wrap every 3 on md-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="w-100 d-none d-lg-block d-xl-none">
                <!-- wrap every 4 on lg-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-xl-block">
                <!-- wrap every 5 on xl-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>


              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="w-100 d-none d-md-block d-lg-none">
                <!-- wrap every 3 on md-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>
              <div class="w-100 d-none d-lg-block d-xl-none">
                <!-- wrap every 4 on lg-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO Type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>
              <div class="w-100 d-none d-md-block d-lg-none">
                <!-- wrap every 3 on md-->
              </div>
              <div class="card h-100 mb-4">
                <div class="card-body">
                  <h5 class="card-title">RSO title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">RSO type</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">More Info</a>
                  <a href="#" class="card-link">Unfollow</a>
                </div>
              </div>

              <div class="w-100 d-none d-sm-block d-md-none">
                <!-- wrap every 2 on sm-->
              </div>

              <div class="w-100 d-none d-xl-block">
                <!-- wrap every 5 on xl-->
              </div>

            </div>
          </div>


        </div>
      </div>

    </div>


  </div>

  </div>

  <!--search RSO MODAL-->
  <div class="modal fade" id="searchRSOsModalContainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-keyboard="false" data-backdrop="static">
    <div id="innerModalRSO" class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Search RSOs</h5>


          <button id="closeModalBtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div style="margin-top: 15px;" class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Keyword&nbsp;</span>
            </div>
            <input id="keywordEventInput" type="text" class="form-control abilityInput" placeholder="Chess Club ..." aria-label="keyword"
              aria-describedby="keyword">


          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text">University</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option>University of Central Florida</option>
              <option>University of Florida</option>
              <option>University of Miami</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">RSO Type</label>
            </div>
            <select class="custom-select ">
              <option selected>Choose...</option>
              <option>Social</option>
              <option>Fundraising</option>
              <option>Tech</option>
              <option>Career</option>
              <option>Volunteer</option>
            </select>
          </div>

          <!--footer contains the buttons for previous and next-->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btnNext">Search</button>
          </div>
        </div>
      </div>
    </div>

  </div>




  <!--search events MODAL-->
  <div class="modal fade" id="searchEventsModalContainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-keyboard="false" data-backdrop="static">
    <div id="innerModal" class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Search Events</h5>


          <button id="closeModalBtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div style="margin-top: 15px;" class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Keyword&nbsp;</span>
            </div>
            <input id="keywordEventInput" type="text" class="form-control abilityInput" placeholder="Resume Workshop ..." aria-label="keyword"
              aria-describedby="keyword">


          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text">University</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option>University of Central Florida</option>
              <option>University of Florida</option>
              <option>University of Miami</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Event Type</label>
            </div>
            <select class="custom-select ">
              <option selected>Choose...</option>
              <option>Social</option>
              <option>Fundraising</option>
              <option>Tech Talks</option>
              <option>Career</option>
            </select>
          </div>

          <!--footer contains the buttons for previous and next-->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btnNext">Search</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!--call for icons-->
  <script>
    feather.replace()
  </script>

</body>

</html>
