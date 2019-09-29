<?php  
    $fullname = $_SESSION['fullname'];

?>

<header>
    <div class="logo">
      <h1 class="logo-text"><span>Asclepius</span>Class</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Class Note</a></li>
      <li><a href="submit_assignment.php">Submit Assignment</a></li>
      <li><a href="#">Subject</a></li>

      <li>
        <a href="#">
          <img src="../images/lecturer.jpg" alt="">
          <!-- <i class="fa fa-user"></i> -->
          <?= $fullname; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>

        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="../logout.php" class="logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>