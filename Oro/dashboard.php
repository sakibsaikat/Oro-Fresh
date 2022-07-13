<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: admin.php");
  }
  
  
  $con = mysqli_connect("localhost:3306","satrong2_sakib","S@kibtas$1514","satrong2_oro");
    if(!$con){
        die("Database Connection Failed.");
    }

  $track_view=0;

  

  if(isset($_GET['view_id'])){

    $view_id = $_GET['view_id'];
    $sql = "SELECT * FROM patients WHERE contact=".$view_id;
    $result = mysqli_query($con,$sql);
    $track_view=1;
  }

  if(isset($_POST['view_id'])){

    $show_id = $_POST['view_id'];
    $sql = "SELECT * FROM patients WHERE contact=".$show_id;
    $result = mysqli_query($con,$sql);
    $track_view=1;
  }
 


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>

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



  <div class="admin-port">

  <div class="logs d-flex justify-content-end">

    <a href="logout.php" class="btn uni-color mx-4 mt-3">Log Out</a>
  </div>

    <div class="search-section d-flex justify-content-center">
      
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="search py-5 d-flex">

                <div class="mb-3">
                <input required type="text" name="view_id" class="form-control" placeholder="Contact No." aria-describedby="emailHelp">
                </div>

                <div class="mb-3 ms-2">
                    <button type="submit" class="btn uni-color">Search</button>
                </div>
                
    
        </form>

    </div>

    <div class="info-section d-flex justify-content-center">
        <div class="mb-3 text-center">

            <a href="addpatientf.php" class="btn uni-color">New Patient</a>
            <br><br>
            <a href="patients.php" class="btn uni-color">Patient List</a>
            <br><br>
            <a href="appointment.php" class="btn uni-color">View Appointment</a>
        </div>
    
    </div>


    <?php 

      if($track_view){

        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){

      


        echo '

      

    <div class="p-info-section d-flex justify-content-center mt-4">
        <div class="p-info">
            <div class="head-sec">
                <p class="px-4 py-2">Patient Identification</p>
            </div>
            <div class="body-sec px-4 py-1 pb-3">
                <span class="d-block">Name: '.$row['name'].'</span>
                <span class="d-block">Age: '.$row['age'].'</span>
                <span class="d-block">Sex: '.$row['sex'].'</span>
                <span class="d-block">Contact: '.$row['contact'].'</span>
                <span class="d-block">Referrence: '.$row['reference'].'</span>
                <span class="d-block">Area: '.$row['area'].'</span>
            </div>

        </div>
    </div>
    <div class="p-info-section d-flex justify-content-center mt-4">
        <div class="p-info">
            <div class="head-sec">
                <p class="px-4 py-2">Medical History</p>
            </div>
            <div class="body-sec px-4 py-1 pb-3">
                <span class="d-block">Diseases: '.$row['medical_history'].'</span>

            </div>

        </div>
    </div>
    <div class="p-info-section d-flex justify-content-center mt-4">
        <div class="p-info">
            <div class="head-sec">
                <p class="px-4 py-2">Problem</p>
            </div>
            <div class="body-sec px-4 py-1 pb-3">
                <span class="d-block">Problems: '.$row['problem'].'</span>

            </div>

        </div>
    </div>
    <div class="p-info-section d-flex justify-content-center mt-4">
        <div class="p-info">
            <div class="head-sec">
                <p class="px-4 py-2">Treatment</p>
            </div>
            <div class="body-sec px-4 py-1 pb-3">
                <span class="d-block">Treatment: '.$row['treatment'].'</span>

            </div>

        </div>
    </div>
    <div class="p-info-section d-flex justify-content-center mt-4">
        <div class="p-info">
            <div class="head-sec">
                <p class="px-4 py-2">Complain</p>
            </div>
            <div class="body-sec px-4 py-1 pb-3">
                <span class="d-block">Pain On: '.$row['pain_on'].'</span>
                <span class="d-block">Upper Left: '.$row['upper_left'].'</span>
                <span class="d-block">Upper Right: '.$row['upper_right'].'</span>
                <span class="d-block">Lower Left: '.$row['lower_left'].'</span>
                <span class="d-block">Lower Right: '.$row['lower_right'].'</span>
                <span class="d-block">BDR: '.$row['BDR'].'</span>
                <span class="d-block">BDC: '.$row['BDC'].'</span>
                <span class="d-block">Summary: '.$row['problem_summary'].'</span>

            </div>

        </div>
    </div>
    <div class="p-info-section d-flex justify-content-center my-4">
        <div class="p-info">
            <div class="head-sec">
                <p class="px-4 py-2">Prescription</p>
            </div>
            <div class="body-sec px-4 py-1 pb-3">
                <span class="d-block">Prescription: </span>


                <!-- Button trigger modal -->
                <button id="msg-btn" type="button" class="btn btn-dark btn-sm my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  View Prescription
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="pres-box d-flex justify-content-center">
                            <img src="Uploads/'.$row['prescription'].'" alt="prescription" width="90%">
                         </div>
                      </div>
                    </div>
                  </div>
                </div>


            </div>

        </div>
    </div>

    <div class="btns text-center my-4">
      <a href="updatepatient.php?update_id='.$row['patient_id'].'" class="btn uni-color">Update Information</a>
    </div>
    ';
          }

        }

        else{
          echo '
          <div class="px-4 py-3 bg-danger">

          <h5 class="text-center text-light">No Search Found</h5>
            
          </div>
          
          ';
        }

      }


    ?>


   



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