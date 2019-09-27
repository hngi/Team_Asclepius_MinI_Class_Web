<?php
require './config/database.php';

echo $_SESSION['success_flash'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/2d058dd44a.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins|Candal|Lora" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/newdashboard.css">


  <!-- <link rel="stylesheet" href="css/main.css"> -->

  <title>Document</title>
</head>

<body>
  <div id="overhead">
    <h3>STUDENT'S DASHBOARD</h3>
  </div>
  <header>
    <div class="logo">
      <h1 class="logo-text"><span>Asclepius</span>Class</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Class Note</a></li>
      <li><a href="#">Assignment</a></li>
      <li><a href="#">Subject</a></li>

      <li>
        <a href="#">
          <img src="images/lecturer.jpg" alt="">
          <!-- <i class="fa fa-user"></i> -->
          Ayenko
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>

        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#" class="logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>

  <div class="container-fluid" id="page-wrapper">
    <div class="main" id="a">
      <div class="main-first">
        <div id="c">
          <img src="images/graduant.png" alt="">
        </div>
        <div id="d">
          <h6>Hi, Code Noob </h6>
          <h4>Welcome to Asclepius Class</h4>
          <p>All about classroom activities would be updated here</p>
        </div>
      </div>
      <div class="main-second">
        <div id="grandChild">
          <div class="title">
            <h4>Class Notes</h4>
            <a href="#">See all</a>
          </div>

          <div id="p-div">
            <div id="col">
              <p>
                Lorem ipsum dolor sit amet
              </p>
              <div>
                <h6>Idealogies About Science</h6>
                <p>Biology</p>
                <p>Note review 12 july 2019 12:00 PM</p>
              </div>
            </div>
            <hr>
            <div id="col">
              <p>
                Lorem ipsum dolor sit amet
              </p>
              <div>
                <h6>Idealogies OF life</h6>
                <p>Biology</p>
                <p>Note review 20 June 2019 07:00 AM</p>
              </div>
            </div>
          </div>
        </div>

        <div id="grandChild">
          <div class="title">
            <h4>Assignments</h4>
            <a href="#">See all</a>
          </div>
          <div id="p-div">
            <div class="assignment">
              <div id="g" class="color-blue"> </div>
              <div class="assignment-child" id="h">
                <div>
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet</p>
                </div>

              </div>

            </div>
            <hr>
            <div class="assignment">
              <div id="g" class="color-red"> </div>
              <div class="assignment-child" id="h">
                <div>
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet</p>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="side" id="b">

      <div id="caleandar">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora earum, qui expedita enim quaerat id non, iusto distinctio sequi minus atque illo. At eum non fugiat voluptatibus cum delectus unde.
      </div>
      <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora earum, qui expedita enim quaerat id non, iusto distinctio sequi minus atque illo. At eum non fugiat voluptatibus cum delectus unde.
      </div>

    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer text-center">
    <div class="footer-middle">
      &copy; Asclepius.com | Designed by Asclepius Team
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/newdashboard.js"></script>
  <script src="js/main.js"></script>



</body>

</html>