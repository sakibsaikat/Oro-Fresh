<?php
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: admin.php");
    }
    
    if(isset($_POST['cno'])){
        $sends = $_POST['cno'];
        header("Location: generatepdf.php?idz=".$sends);
    }
    include "newconfig.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Patient</title>

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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="patient-form" enctype="multipart/form-data" method="POST">


            <div class="row my-5">

                <div class="col-md-7 col-sm-12">
                    <div class="info pb-4">
                        <div class="head-sec">
                            <p class="px-4 py-2">Patient Identification</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">

                            <div class="first-inputs row d-flex justify-content-around">
                                <div class="col-md-5">
                                    <label for="name">Name</label><br>
                                    <input class="w-100" type="text" id="name" name="name">
                                </div>
                                <div class="col-md-5">
                                    <label for="cno">Contact No.</label><br>
                                    <input class="w-100" type="text" id="cno" name="cno">
                                </div>
                            </div>



                            <div class="second-inputs mt-4 row d-flex justify-content-around">
                                <div class="col-md-3">
                                    <label for="gen">Sex</label><br>
                                    <select class="w-100" name="sex" id="sex">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="age">Age</label><br>
                                    <input class="w-100" type="text" id="age" name="age">
                                </div>
                                <div class="col-md-3">
                                    <label for="ref">Referrence</label><br>
                                    <input class="w-100" type="text" id="ref" name="ref">
                                </div>
                            </div>
                            <div class="third-inputs mt-4 row d-flex justify-content-around">
                                <div class="col-md-11">
                                    <label for="area">Area/Region</label><br>
                                    <input class="w-100" type="text" id="area" name="area">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-5 col-sm-12">
                    <div class="info">
                        <div class="head-sec">
                            <p class="px-4 py-2">Medical History</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">
                            <span class="d-block">Diabetics: <input type="checkbox" name="med_history[]"
                                    value="Diabetics"></span>
                            <span class="d-block">Heart Diseases: <input type="checkbox" name="med_history[]"
                                    value="Heart Diseases"></span>
                            <span class="d-block">Kindey Diseases: <input type="checkbox" name="med_history[]"
                                    value="Kindey Diseases"></span>
                            <span class="d-block">Hepatities: <input type="checkbox" name="med_history[]"
                                    value="Hepatities"></span>
                            <span class="d-block">Drug Reaction: <input type="checkbox" name="med_history[]"
                                    value="Drug Reaction"></span>

                        </div>

                    </div>
                </div>


            </div>

            <div class="row my-5 d-md-flex justify-content-around">


                <div class="col-md-6">
                    <div class="info">
                        <div class="head-sec">
                            <p class="px-4 py-2">Problem</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">
                            <span class="d-block">Calculass Plaque, Stain, Stone: <input type="checkbox"
                                    name="problems[]" value="Calculass Plaque, Stain, Stone"></span>
                            <span class="d-block">Gum Bleeding: <input type="checkbox" name="problems[]"
                                    value="Gum Bleeding"></span>
                            <span class="d-block">Foul Odor: <input type="checkbox" name="problems[]"
                                    value="Foul Odor"></span>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info">
                        <div class="head-sec">
                            <p class="px-4 py-2">Treatment</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">
                            <span class="d-block">Resoration: <input type="checkbox" name="treatment[]"
                                    value="Resoration"></span>
                            <span class="d-block">Conservetives: <input type="checkbox" name="treatment[]"
                                    value="Conservetives"></span>
                            <span class="d-block">Endodontics: <input type="checkbox" name="treatment[]"
                                    value="Endodontics"></span>
                            <span class="d-block">Prosthodontics: <input type="checkbox" name="treatment[]"
                                    value="Prosthodontics"></span>
                            <span class="d-block">Orthodontics: <input type="checkbox" name="treatment[]"
                                    value="Orthodontics"></span>
                            <span class="d-block">Surgery: <input type="checkbox" name="treatment[]"
                                    value="Surgery"></span>
                            <span class="d-block">Periodontics: <input type="checkbox" name="treatment[]"
                                    value="Periodontics"></span>
                            <span class="d-block">Prevention: <input type="checkbox" name="treatment[]"
                                    value="Prevention"></span>
                            <span class="d-block">Medication: <input type="checkbox" name="treatment[]"
                                    value="Medication"></span>
                            <span class="d-block">Asthetics: <input type="checkbox" name="treatment[]"
                                    value="Asthetics"></span>

                        </div>

                    </div>
                </div>




            </div>

            <div class="row my-5">

                <div class="col-md-12">
                    <div class="info-2">
                        <div class="head-sec">
                            <p class="px-4 py-2">Complain</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">
                            <span class="d-block">Past Case History: <input type="radio" value="Y" name="opinion-1"> Y
                                <input type="radio" value="N" name="opinion-1"> N</span>
                            <span class="d-block">Radiological History: <input type="radio" value="Y" name="opinion-2">
                                Y <input type="radio" value="N" name="opinion-2"> N <input type="radio" value="A" name="opinion-2"> A</span>

                            <div class="pain  mt-4 d-flex justify-content-center">
                                <div class="info-2 info-teeth">
                                    <div class="head-sec head-sec-3">
                                        <p class="px-4 py-2">Pain On</p>
                                    </div>
                                    <div class="body-sec px-4 py-1 pb-3 d-md-flex justify-content-center">

                                        <div class="halfs d-flex">

                                            <div class="division text-center">
                                                <span class="d-block">1</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="1">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">2</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="2">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">3</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="3">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">4</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="4">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">5</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="5">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">6</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="6">
                                            </div>


                                        </div>
                                        <div class="halfs d-flex">


                                            <div class="division text-center">
                                                <span class="d-block">7</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="7">
                                            </div>



                                            <div class="division text-center">
                                                <span class="d-block">8</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="8">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">9</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="9">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">10</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="10">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">11</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="pain_teeth[]" value="11">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="two-side d-md-flex justify-content-around">


                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec">
                                            <p class="px-4 py-2">Upper Left</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                            <div class="division text-center">
                                                <span class="d-block">8</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="8">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">7</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="7">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">6</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="6">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">5</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="5">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">4</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="4">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">3</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="3">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">2</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="2">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">1</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_left_teeth[]" value="1">
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec">
                                            <p class="px-4 py-2">Upper Right</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                            <div class="division text-center">
                                                <span class="d-block">1</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="1">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">2</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="2">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">3</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="3">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">4</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="4">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">5</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="5">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">6</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="6">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">7</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="7">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">8</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="up_right_teeth[]" value="8">
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="two-side d-md-flex justify-content-around">


                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec">
                                            <p class="px-4 py-2">Lower Left</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                            <div class="division text-center">
                                                <span class="d-block">8</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="8">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">7</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="7">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">6</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="6">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">5</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="5">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">4</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="4">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">3</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="3">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">2</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="2">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">1</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_left_teeth[]" value="1">
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec">
                                            <p class="px-4 py-2">Lower Right</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                            <div class="division text-center">
                                                <span class="d-block">1</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="1">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">2</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="2">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">3</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="3">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">4</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="4">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">5</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="5">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">6</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="6">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">7</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="7">
                                            </div>
                                            <div class="division text-center">
                                                <span class="d-block">8</span>
                                                <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                <br>
                                                <input type="checkbox" name="low_right_teeth[]" value="8">
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="two-side d-md-flex justify-content-around">

                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec head-sec-2">
                                            <p class="px-4 py-2">BDR</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                            <span class="me-3">1 <input type="checkbox" name="bdr[]" value="1"></span>
                                            <span class="me-3">2 <input type="checkbox" name="bdr[]" value="2"></span>
                                            <span class="me-3">3 <input type="checkbox" name="bdr[]" value="3"></span>
                                            <span class="me-3">4 <input type="checkbox" name="bdr[]" value="4"></span>
                                            <span class="me-3">5 <input type="checkbox" name="bdr[]" value="5"></span>
                                            <span class="me-3">6 <input type="checkbox" name="bdr[]" value="6"></span>
                                            <span class="me-3">7 <input type="checkbox" name="bdr[]" value="7"></span>
                                            <span class="me-3">U <input type="checkbox" name="bdr[]" value="U"></span>
                                            <span class="me-3">L <input type="checkbox" name="bdr[]" value="L1"></span>
                                            <span class="me-3">L <input type="checkbox" name="bdr[]" value="L2"></span>
                                            <span class="me-3">R <input type="checkbox" name="bdr[]" value="R"></span>




                                        </div>
                                    </div>

                                </div>
                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec head-sec-2">
                                            <p class="px-4 py-2">BDC</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                            <span class="me-3">1 <input type="checkbox" name="bdc[]" value="1"></span>
                                            <span class="me-3">2 <input type="checkbox" name="bdc[]" value="2"></span>
                                            <span class="me-3">3 <input type="checkbox" name="bdc[]" value="3"></span>
                                            <span class="me-3">4 <input type="checkbox" name="bdc[]" value="4"></span>
                                            <span class="me-3">5 <input type="checkbox" name="bdc[]" value="5"></span>
                                            <span class="me-3">6 <input type="checkbox" name="bdc[]" value="6"></span>
                                            <span class="me-3">7 <input type="checkbox" name="bdc[]" value="7"></span>
                                            <span class="me-3">U <input type="checkbox" name="bdc[]" value="U"></span>
                                            <span class="me-3">L <input type="checkbox" name="bdc[]" value="L1"></span>
                                            <span class="me-3">L <input type="checkbox" name="bdc[]" value="L2"></span>
                                            <span class="me-3">R <input type="checkbox" name="bdc[]" value="R"></span>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="last-foot mt-5">
                                <span>Attrition <input type="checkbox" name="final_problem[]" value="Attrition"></span>
                                <span>Abration <input type="checkbox" name="final_problem[]" value="Abration"></span>
                                <span>Irrotion <input type="checkbox" name="final_problem[]" value="Irrotion"></span>
                            </div>

                        </div>

                    </div>
                </div>



            </div>

            <div class="my-5">

                <div class="info-3 pb-4">
                    <div class="head-sec">
                        <p class="px-4 py-2">Payment & Visit</p>
                    </div>
                    <div class="body-sec">

                        <div class="inputs d-flex justify-content-around">

                            <div class="input-box">
                                <label for="t_cost">Total Cost</label><br>
                                <input id="t_cost" name="t_cost" type="text">
                            </div>
                            <div class="input-box">
                                <label for="due">Due</label><br>
                                <input id="due" name="due" type="text">
                            </div>

                        </div>
                        <div class="inputs d-flex justify-content-around">

                            <div class="input-box">
                                <label for="v_date">Next Visit</label><br>
                                <input style="padding:4px 20px;" id="v_date" name="v_date" type="date">
                            </div>
                            <div class="input-box">
                                <label for="a_date">Date of Appointment</label><br>
                                <input style="padding:4px 20px;" id="a_date" name="a_date" type="date">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="prescription my-3 text-center">
                <input type="file" name="prescription">
            </div>

            <div class="sub-btn my-5 text-center">
                <button id="submit-btn" type="submit" class="btn uni-color">Submit</button><br><br>
                <button type="submit" class="btn uni-color">Generate PDF</button>
            </div>

            <button hidden id="msg-btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Booking Result
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Patient Information</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       Patient Information is Added.
                    </div>
                  </div>
                </div>
              </div>

        </form>


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



    <script src="JS/addpatient.js"></script>


    <!-- fontawesome link  -->
    <script src="https://kit.fontawesome.com/72a8635200.js" crossorigin="anonymous"></script>
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>