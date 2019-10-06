<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/teacher_dash.css">
  <title>Document</title>
</head>

<body>
    <header class="header-nav">
          <img src="../images/Logo.png" class="header-nav__logo" alt="logo"/>

        <nav class="header-nav__links">
          <a href="#" class="link">Home</a>
          <a href="#" class="link">Class Note</a>
          <a href="#" class="link">Assignment</a>
          <a href="#" class="link">Subject</a>
        </nav>

        
        <div class="group">
        <img src="../images/Logo.png" class="header-nav__picture" alt="logo"/>
        <div class="author">
        <h5 class="header-nav__name"> Code Noob</h5>
        <h4>Teacher</h4>
        </div>
      </div>
    </header>

    <main class="content">
      <section class="sub-message">
        <div class="greetings">
            <img src="../images/graduant.png" class="greetings__img" alt="graduant">
            <div class="text">
              Hi,  Code Noob!<br>
              Welcome to Asclepius Class <br>
              Create Your Assignment Here   
            </div>   
        </div>
        <div class="form">

        <form>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Select Subject</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Select Summary</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Message Area</span>
          </div>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <button class="btn btn-primary my-lg-3">Send</button>
        </form>
        
        </div>
      </section>
      <section class="ads">
       Ads
      </section>
    </main>

  <script src="js/main.js"></script>
</body>

</html>