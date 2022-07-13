<?php

    include "config.php";

    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: admin.php");
    }

    if(isset($_GET['a_u_id'])){
        $update_id = $_GET['a_u_id'];
        $sql = "SELECT * FROM appointment WHERE appointment_id=".$update_id;
        $result = mysqli_query($con,$sql);
        
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- bootstrap css link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="CSS/home.css" />
</head>

<body>
  <div class="header py-3 px-md-5 d-md-flex d-sm-block">
    <div class="site-info d-md-flex align-items-center ms-md-5 text-center">
      <div class="logo">
        <img src="Images/logo.png" alt="logo" height="100" />
      </div>
      <div class="logo-name ms-md-5">
        <h1 class="text-light">Oro Fresh Dental Care</h1>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ms-md-5">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php#service">SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php#contact">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">ADMIN</a>
            </li>
            <li class="nav-item d-sm-block d-md-none">
              <a class="nav-link active" aria-current="page" href="home.php#appointment">Appointment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="buttons d-md-flex align-items-center ms-md-5 text-center">
      <a href="home.php#appointment" class="btn btn-outline-light apt">Appointment</a>
    </div>
  </div>

  
  <section id="appointment"></section>

  <div class="section-6 py-4">

    <h2 class="captions text-center mt-5">Appointment</h2>
    <div class="bottom-line"></div>

    <?php
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
    ?>

    <form id="appointment-form" action="#" class="py-5 ap-form">


      <div class="ap">
      <div class="fields d-sm-block d-md-flex justify-content-around">

     
                    

  
          <input hidden placeholder="Name" value="<?php echo $row['appointment_id'] ?>" type="text" id="ap_id" name="ap_id" class="form-control">


        <div class="segment">
          <label for="name">Name</label>
          <input placeholder="Name" value="<?php echo $row['name'] ?>" type="text" id="name" name="p_name" class="form-control">
        </div>

        <div class="segment">
          <label for="appointment">Date of appointment</label>
          <input placeholder="Select date" value="<?php echo $row['ap_date'] ?>" type="date" id="appointment" name="ap_date" class="form-control">
        </div>
      
        <div class="segment">
          <label for="contact">Contact No.</label>
          <input placeholder="Contact" value="<?php echo $row['contact'] ?>"  type="text" id="contact" name="p_contact" class="form-control">
        </div>
      </div>
    </div>

  

      <p class="text-center p-4" style="color: rgb(170, 7, 7);">
        ** Friday & Saturday is off !! **
      </p>

      <div class="sub-btn text-center">
        <button id="appointment-update" type="submit" class="btn sub">Update</button>
      </div>



      <!-- Button trigger modal -->
<button hidden id="msg-btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Booking Result
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Your Appointment is Updated Successfully.
      </div>
    </div>
  </div>
</div>

    </form>


    
    <?php
                }
            }
      ?>

  </div>

  </div>




  <section id="contact"></section>

  <div class="footers p-4 py-5 row text-light">

    <div class="col-md-5">
      <h5>About Us</h5>
      <hr class="bt-line">
      <p class="text-muted">
        As a leading industry innovator, Oro Fresh Dental Care is oppening up
        new opportunities for dental patinets. Contact us to find out
        what we have offer you.
      </p>
      <div class="social-links">
        <a href="#"><img src="icons/facebook.png" alt="fb" width="30"></a>
        <a href="#"><img src="icons/instagram.png" alt="fb" width="30"></a>
        <a href="#"><img src="icons/twitter.png" alt="fb" width="30"></a>
        <a href="#"><img src="icons/linkedin.png" alt="fb" width="30"></a>

      </div>

    </div>
    <div class="col-md-3">
      <h5>Quick Links</h5>
      <hr class="bt-line">
      <div class="menus mt-4">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="#">Appointment</a>
        <a href="#">Admin</a>
      </div>

    </div>

    <div class="col-md-4">
      <h5>Contact</h5>
      <hr class="bt-line">
      <address style="color: rgb(200, 58, 7);">
        Mohakhali, Gulshan-1, Dhaka.<br>
        +880-01723-456789<br>
        orafreshdntalcare@gmail.com
      </address>
    </div>


  </div>

  <div class="bg-dark text-center">
    <code class="text-muted">©Copyright Sakibur Rahman Saikat 2022. All right reserverd.</code>
  </div>





  <script src="JS/smoothScroll.js"></script>
  <script src="JS/update_ap.js"></script>
  <!-- fontawesome link  -->
  <script src="https://kit.fontawesome.com/72a8635200.js" crossorigin="anonymous"></script>
  <!-- bootstrap js link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>