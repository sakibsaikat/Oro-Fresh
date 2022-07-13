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
              <a class="nav-link active" aria-current="page" href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#service">SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#contact">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">ADMIN</a>
            </li>
            <li class="nav-item d-sm-block d-md-none">
              <a class="nav-link active" aria-current="page" href="#appointment">Appointment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="buttons d-md-flex align-items-center ms-md-5 text-center">
      <a href="#appointment" class="btn btn-outline-light apt">Appointment</a>
    </div>
  </div>

  <div class="section1 d-sm-block d-md-flex align-items-center justify-content-around mt-5">
    <div class="left-section text-center">
      <h1>
        Easy Access To
        <span style="color: orangered">Great<br />Dental Care</span> Shouldn't
        Be A<br />Matter Of Luck.
      </h1>
      <a href="#" class="btn get">Get Started</a>
    </div>

    <div class="right-section">
      <img src="Images/h2.png" alt="cartoon" height="400" />
    </div>
  </div>

  <section id="about"></section>

  <h2 class="captions text-center mt-5">About Us</h2>
  <div class="bottom-line"></div>

  <div class="section-2 d-sm-block d-md-flex justify-content-around align-items-center mt-5">
    <div class="left-part">
      <img src="Images/h1.png" alt="carts" height="300" />
    </div>
    <div class="right-part">
      <p>
        As a leading industry innovator, Oro Fresh Dental Care is oppening up
        new opportunities<br />for dental patinets. Contact us to find out
        what we have offer you.
      </p>

      <div class="meter-wrapper d-flex justify-content-center mb-2">
        <div class="meter1">
          <span class="infos d-flex align-items-center">
            <span class="fw-bold">Experience Dentist</span>
            <span class="fs-6 ms-4" style="color: orangered">85%</span>
          </span>
          <meter id="meter" value="8" min="0" max="10" high="10"></meter>
        </div>
      </div>
      <div class="meter-wrapper d-flex justify-content-center mb-2">
        <div class="meter1">
          <span class="infos d-flex align-items-center">
            <span class="fw-bold">Modern Equipments</span>
            <span class="fs-6 ms-4" style="color: orangered">60%</span>
          </span>
          <meter id="meter" value="6" min="0" max="10" high="10"></meter>
        </div>
      </div>
      <div class="meter-wrapper d-flex justify-content-center mb-2">
        <div class="meter1">
          <span class="infos d-flex align-items-center">
            <span class="fw-bold">Friendly Staff</span>
            <span class="fs-6 ms-4" style="color: orangered">90%</span>
          </span>
          <meter id="meter" value="9" min="0" max="10" high="10"></meter>
        </div>
      </div>
    </div>
  </div>

  <div class="secion-3 row mt-5">

    <div class="col-md-3 text-center fs-3">
      <p class="fw-light p-4">20<br>years of experience</p>
    </div>
    <div class="col-md-3 text-center fs-3">
      <p class="fw-light p-4">10+<br>Certificate</p>
    </div>
    <div class="col-md-3 text-center fs-3">
      <p class="fw-light p-4">1500+<br>Happy Patients</p>
    </div>
    <div class="col-md-3 text-center fs-3">
      <p class="fw-light p-4">30<br>Friendly Staff</p>
    </div>

  </div>

  <section id="service"></section>

  <div class="section-4">

    <h2 class="captions text-center mt-5">Our Services</h2>
    <div class="bottom-line"></div>

    <div class="row d-flex mt-5">
        <div class="div1 col-md-4 p-5 text-center">
            <img src="contet-images/tooth (1).png" alt="#" height="150">
            <h3>Calculus Plaque, Stain, Stone</h3>
            <p>Calculus and Plaque are two terms that both relate to
                bacteria growth on our teeth and they are so detrimental.</p>
        </div>

        <div class="div2 col-md-4 p-5 text-center">
            <img src="contet-images/wisdom-tooth (1).png" alt="#" height="150">
            <h3>Gum Bleeding</h3>
            <p>Bleeding gums are a sign of gingivitis,or inflammation of
                your gums.It's a common and mild form of gum disease.</p>
        </div>

        <div class="div3 col-md-4 p-5 text-center">
            <img src="contet-images/dental-care (1).png" alt="#" height="150">
            <h3>Foul Odor</h3>
            <p>Do you feel foul smelling on your mouth?To get rid of it 
                contact with the specialist of Oro Fresh Dental Care .</p>
        </div>

    </div>


    <h2 class="captions text-center mt-5">Our Treatments</h2>
    <div class="bottom-line"></div>

    <div class="row d-flex mt-5">
        <div class="div1 col-md-4 p-5 text-center">
            <img src="contet-images/implant.png" alt="#" height="150">
            <h3>Resoration</h3>
            <p>Resorations are procedures that your dentist uses tofix 
                your missing teeth or missing parts of your teeth.</p>
        </div>

        <div class="div2 col-md-4 p-5 text-center">
            <img src="contet-images/world-oceans-day.png" alt="#" height="150">
            <h3>Conservatives</h3>
            <p>Conservative dentistry refers to a dentistry branch
                 whose goal is to conserve the teeth in the mouth.</p>
        </div>

        <div class="div3 col-md-4 p-5 text-center">
            <img src="contet-images/endodontist.png" alt="#" height="150">
            <h3>Endodontics</h3>
            <p>Dental endodontic treatment,or root canal treatment,
                treats the soft pulb tissue inside the tooth.</p>
        </div>
        <div class="div4 col-md-4 p-5 text-center">
            <img src="contet-images/wisdom-tooth.png" alt="#" height="150">
            <h3>Prosthodontics</h3>
            <p>Dental Prosthodontics is a complex Dental treatment
                that includes resoration or dental implants and jaw 
                disorder.</p>
        </div>
        <div class="div5 col-md-4 p-5 text-center">
            <img src="contet-images/orthodontic.png" alt="#" height="150">
            <h3>Orthodontics</h3>
            <p>It is treatment of correcting existing condition like bad 
                bite or large spaces between the teeth and jaw 
                irregularities .</p>
        </div>
        <div class="div6 col-md-4 p-5 text-center">
            <img src="contet-images/x-ray.png" alt="#" height="150">
            <h3>Surgery</h3>
            <p>Dental surgery is any of a number of medical procedures
                that involve artificially modifying teeth,gum and jaw
                bones.</p>
        </div>
        <div class="div7 col-md-4 p-5 text-center">
            <img src="contet-images/teeth.png" alt="#" height="150">
            <h3>Periodontics</h3>
            <p>Periodontic is a special dental treatment where treats 
                issues that affect your gums and the bones in your mouth.</p>
        </div>
        <div class="div8 col-md-4 p-5 text-center">
            <img src="contet-images/tooth.png" alt="#" height="150">
            <h3>Prevention</h3>
            <p>It's a combination of regular dental check-ups along with 
                developing good habits like brushing and flossing.</p>
        </div>
        <div class="div9 col-md-4 p-5 text-center">
            <img src="contet-images/medical-care.png" alt="#" height="150">
            <h3>Madication</h3>
            <p>We provide the best medication to control pain,
                prevent infection,and treat fungal and bacterial infections.</p>
        </div>


    </div>





  </div>

  <div class="section-5 my-5">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/147476.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block text-light">
            <h2 class="captions text-center mt-md-5">Our Patient Says</h2>
            <div class="bottom-line"></div>

            <div class="des d-flex justify-content-around align-items-center mt-5">
              <div class="im me-4">
                <img src="Images/pat.PNG" alt="" width="150" height="150">
              </div>
              <div class="texts text-start">
                <p>I am very much satisfied and completely fine now. The environment is just mind blowing and every staff is very much well mannered.</p>
                <h6>-Seasun Amin</h6>
                <p>Dental Patient</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/123.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block text-light">
            <h2 class="captions text-center mt-md-5">Our Patient Says</h2>
            <div class="bottom-line"></div>

            <div class="des d-flex justify-content-around align-items-center mt-5">
              <div class="im me-4">
                <img src="Images/pat.PNG" alt="" width="150" height="150">
              </div>
              <div class="texts text-start">
                <p>I am very much satisfied and completely fine now. The environment is just mind blowing and every staff is very much well mannered.</p>
                <h6>-Seasun Amin</h6>
                <p>Dental Patient</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/147476.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block text-light">
            <h2 class="captions text-center mt-md-5">Our Patient Says</h2>
            <div class="bottom-line"></div>

            <div class="des d-flex justify-content-around align-items-center mt-5">
              <div class="im me-4">
                <img src="Images/pat.PNG" alt="" width="150" height="150">
              </div>
              <div class="texts text-start">
                <p>I am very much satisfied and completely fine now. The environment is just mind blowing and every staff is very much well mannered.</p>
                <h6>-Seasun Amin</h6>
                <p>Dental Patient</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



  </div>


  <section id="appointment"></section>

  <div class="section-6 py-4">

    <h2 class="captions text-center mt-5">Appointment</h2>
    <div class="bottom-line"></div>

    <form id="appointment-form" action="#" class="py-5 ap-form">

      <div class="ap">
      <div class="fields d-sm-block d-md-flex justify-content-around">

        <div class="segment">
          <label for="name">Name</label>
          <input placeholder="Name" type="text" id="name" name="p_name" class="form-control">
        </div>

        <div class="segment">
          <label for="appointment">Date of appointment</label>
          <input placeholder="Select date" type="date" id="appointment" name="ap_date" class="form-control">
        </div>
      
        <div class="segment">
          <label for="contact">Contact No.</label>
          <input placeholder="Contact" type="text" id="contact" name="p_contact" class="form-control">
        </div>
      </div>
    </div>


      <p class="text-center p-4" style="color: rgb(170, 7, 7);">
        ** Friday & Saturday is off !! **
      </p>

      <div class="sub-btn text-center">
        <button id="appointment-submit" type="submit" class="btn sub">Submit</button>
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
         Your Appointment is Booked Successfully.
      </div>
    </div>
  </div>
</div>

    </form>
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
  <script src="JS/appointment.js"></script>
  <!-- fontawesome link  -->
  <script src="https://kit.fontawesome.com/72a8635200.js" crossorigin="anonymous"></script>
  <!-- bootstrap js link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>