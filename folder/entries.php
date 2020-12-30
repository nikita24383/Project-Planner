<?php
  include('session.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Dashboard | Project Planner</title>
    <link rel="icon" type="img/png" href="../css/images/pp.png">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/entries.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/list.css"> -->
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Project Planner</div>
        <ul class="list-items">
          <li><a href="newProject.php">HOME</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
    </div>
    <div class="content">
      <div class="header1"></div>
      <p>
      <div class="wrapper1">
                    <nav>
                      <button><a id="to" href="to-do.php">To do List</a></button>
                      <button ><a href="tasks.php">Tasks</a></button>
                      <button class="active" ><a href="" class="active">Entries</a></button>
                      <!-- <input type="radio" name="tab" id="home" checked>
                      <input type="radio" name="tab" id="inbox">
                      <input type="radio" name="tab" id="contact">
                      <input type="radio" name="tab" id="Heart">
                      <input type="radio" name="tab" id="About">
                      <button for="home" class="home" style="width: 100%; height: auto;"><label>Entries</label></button> -->

                      <!-- <label for="home" class="home"><a href="home.php">Entries</a></label>
                      <label for="inbox" class="inbox"><a href="dashboardEntries.html"><i class="fas fa-user-friends"></i>Members</a></label>
                      <label for="contact" class="contact"><a href="#"><i class="fas fa-tasks"></i>To-do List</a></label> -->
                      <!-- <label for="heart" class="heart"><a href="#"><i class="far fa-heart"></i>Heart</a></label>
                      <label for="about" class="about"><a href="#"><i class="far fa-user"></i>About</a></label> -->
                      <!-- <div class="tab"></div> -->
                    </nav>

      </div>

     <div class="dash" >

      <!-- insert hereeee -->
        
     <table style="margin-top: 2%;">
            <tr>
            </tr>
            <?php
            // $conn = mysqli_connect("localhost"," ","root");

            include "connect.php";

            $pid = $_SESSION['project_id'];

            // Check connection
            // mysqli_select_db($conn, 'project_planner');

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            // insert here
  
            $conn->close();
            ?>
        </table>

     </div>
</p>
</div>
<script>
  const mq = window.matchMedia( "(max-width: 768px)" );
  if (mq.matches) {
    document.getElementById("to").text = "To do";
  }
</script>
</body>
</html>