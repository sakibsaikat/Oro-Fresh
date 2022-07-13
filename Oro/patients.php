<?php

  include "config.php";

  session_start();
  if(!isset($_SESSION["username"])){
  header("Location: admin.php");
  }



  if(isset($_GET['del_id'])){
    $del = $_GET['del_id'];


    $sql = "DELETE FROM patients WHERE patient_id=".$del;
    $result = mysqli_query($con,$sql);

    if($result){

    }


  }

  $sql = "SELECT * FROM patients";
  $result = mysqli_query($con,$sql);



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Patient List</title>

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

  <div class="admin-login-form">
      <form action="#"></form>
  </div>



  <div class="admin-port my-5 px-5">

    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php

        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            
            echo '
              <tr>
                <th scope="row">'.$row['patient_id'].'</th>
                <td>'.$row['name'].'</td>
                <td>'.$row['age'].'</td>
                <td>'.$row['contact'].'</td>
                <td>
                    <a href="dashboard.php?view_id='.$row['contact'].'" class="btn btn-warning btn-sm">View</a>
                    <a href="patients.php?del_id='.$row['patient_id'].'" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            ';

            
          }
        }

        ?>
        
         
        </tbody>
      </table>

   



  </div>



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





  <!-- fontawesome link  -->
  <script src="https://kit.fontawesome.com/72a8635200.js" crossorigin="anonymous"></script>
  <!-- bootstrap js link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>