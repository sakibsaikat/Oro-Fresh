<?php
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: admin.php");
    }
    
    include "newconfig.php";

    if(isset($_GET['update_id'])){
        $update_id = $_GET['update_id'];

        $sql = "SELECT * FROM patients where patient_id=".$update_id;
        $result = mysqli_query($con,$sql);
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Patient</title>

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

        <form action="#" id="patient-form" enctype="multipart/form-data">

        <?php

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>

      


            <div class="row my-5">

                <div class="col-md-7 col-sm-12">
                    <div class="info pb-4">
                        <div class="head-sec">
                            <p class="px-4 py-2">Patient Identification</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">

                            <div class="first-inputs row d-flex justify-content-around">

                                    <input hidden class="w-100" type="text" value="<?php echo $row['patient_id'] ?>" id="name" name="update_id">
                               
                                <div class="col-md-5">
                                    <label for="name">Name</label><br>
                                    <input class="w-100" type="text" value="<?php echo $row['name'] ?>" id="name" name="name">
                                </div>
                                <div class="col-md-5">
                                    <label for="cno">Contact No.</label><br>
                                    <input class="w-100" type="text" value="<?php echo $row['contact'] ?>" id="cno" name="cno">
                                </div>
                            </div>



                            <div class="second-inputs mt-4 row d-flex justify-content-around">
                                <div class="col-md-3">
                                    <label for="gen">Sex</label><br>
                                    <select class="w-100" name="sex" id="sex">
                                        <?php
                                            $gender = $row['sex'];
                                            $selecting = "selected";
                                            if($gender=="Male"){
                                                echo '
                                                <option '.$selecting.' value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                ';
                                            }
                                            else if($gender=="Female"){
                                                echo '
                                                <option value="Male">Male</option>
                                                <option '.$selecting.' value="Female">Female</option>
                                                ';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="age">Age</label><br>
                                    <input class="w-100" value="<?php echo $row['age'] ?>" type="text" id="age" name="age">
                                </div>
                                <div class="col-md-3">
                                    <label for="ref">Referrence</label><br>
                                    <input class="w-100" value="<?php echo $row['reference'] ?>" type="text" id="ref" name="ref">
                                </div>
                            </div>
                            <div class="third-inputs mt-4 row d-flex justify-content-around">
                                <div class="col-md-11">
                                    <label for="area">Area/Region</label><br>
                                    <input class="w-100" value="<?php echo $row['area'] ?>" type="text" id="area" name="area">
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

                            <?php
                                $medical_his = array("Diabetics","Heart Diseases","Kindey Diseases","Hepatities","Drug Reaction");
                                $database_med = $row['medical_history'];
                                $database_med_hist = explode("-",$database_med);
                                $cheked=0;
                                $checking = "checked";
                                
                                for($i=0;$i<count($medical_his);$i++){
                                    for($j=0;$j<count($database_med_hist);$j++){
                                        if($medical_his[$i]==$database_med_hist[$j]){
                                            $cheked=1;
                                            break;
                                        }
                                    }
                                    if($cheked==1){
                                        echo '
                                             <span class="d-block">'.$medical_his[$i].': <input '.$checking.' type="checkbox" name="med_history[]"
                                                value="'.$medical_his[$i].'"></span>
                                        ';
                                        $cheked=0;
                                    }
                                    else{
                                        echo '
                                             <span class="d-block">'.$medical_his[$i].': <input type="checkbox" name="med_history[]"
                                                value="'.$medical_his[$i].'"></span>
                                        ';
                                    }
                                }
                            ?>

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
                        
                        <?php
                                $values_arr = array("Calculass Plaque, Stain, Stone","Gum Bleeding","Foul Odor");
                                $database_value = $row['problem'];
                                $database_values = explode("-",$database_value);
                                $cheked=0;
                                $checking = "checked";
                                
                                for($i=0;$i<count($values_arr);$i++){
                                    for($j=0;$j<count($database_values);$j++){

                                        if($values_arr[$i]==$database_values[$j]){
                                            $cheked=1;
                                            break;
                                        }
                                    }
                                    if($cheked==1){
                                        echo '
                                             <span class="d-block">'.$values_arr[$i].': <input '.$checking.' type="checkbox" name="problems[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                        $cheked=0;
                                    }
                                    else{
                                        echo '
                                             <span class="d-block">'.$values_arr[$i].': <input type="checkbox" name="problems[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                    }
                                }
                            ?>

                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info">
                        <div class="head-sec">
                            <p class="px-4 py-2">Treatment</p>
                        </div>
                        <div class="body-sec px-4 py-1 pb-3">


                        <?php
                                $values_arr = array("Resoration","Conservetives","Endodontics","Prosthodontics","Orthodontics","Surgery","Periodontics","Prevention","Medication","Asthetics");
                                $database_value = $row['treatment'];
                                $database_values = explode("-",$database_value);
                                $cheked=0;
                                $checking = "checked";
                                
                                for($i=0;$i<count($values_arr);$i++){
                                    for($j=0;$j<count($database_values);$j++){

                                        if($values_arr[$i]==$database_values[$j]){
                                            $cheked=1;
                                            break;
                                        }
                                    }
                                    if($cheked==1){
                                        echo '
                                             <span class="d-block">'.$values_arr[$i].': <input '.$checking.' type="checkbox" name="treatment[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                        $cheked=0;
                                    }
                                    else{
                                        echo '
                                             <span class="d-block">'.$values_arr[$i].': <input type="checkbox" name="treatment[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                    }
                                }
                            ?>

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

                        <?php
                            $past = $row['past_history'];
                            if($past=="Y"){
                                echo '
                                <span class="d-block">Past Case History: <input checked type="radio" value="Y" name="opinion-1"> Y
                                <input type="radio" value="N" name="opinion-1"> N</span>
                                
                                ';
                            }
                            else if($past=="N"){
                                echo '
                                <span class="d-block">Past Case History: <input type="radio" value="Y" name="opinion-1"> Y
                                <input checked type="radio" value="N" name="opinion-1"> N</span>
                                
                                ';
                            }

                        ?>
                        <?php
                            $past = $row['radiology_history'];
                            if($past=="Y"){
                                echo '
                                <span class="d-block">Radiological History: <input checked type="radio" value="Y" name="opinion-2">
                                Y <input type="radio" value="N" name="opinion-2"> N <input type="radio" value="A" name="opinion-2"> A</span>
                                
                                ';
                            }
                            else if($past=="N"){
                                echo '
                                <span class="d-block">Radiological History: <input type="radio" value="Y" name="opinion-2">
                                Y <input checked type="radio" value="N" name="opinion-2"> N <input type="radio" value="A" name="opinion-2"> A</span>
                                ';
                            }
                            else if($past=="A"){
                                echo '
                                <span class="d-block">Radiological History: <input type="radio" value="Y" name="opinion-2">
                                Y <input type="radio" value="N" name="opinion-2"> N <input checked type="radio" value="A" name="opinion-2"> A</span>
                                ';
                            }

                        ?>


                            



                           

                            

                            <div class="pain  mt-4 d-flex justify-content-center">
                                <div class="info-2 info-teeth">
                                    <div class="head-sec head-sec-3">
                                        <p class="px-4 py-2">Pain On</p>
                                    </div>
                                    <div class="body-sec px-4 py-1 pb-3 d-md-flex justify-content-center">

                                        <div class="halfs d-flex">

                                        <?php

                                            $pain_on = $row['pain_on'];
                                            $pains = explode("-",$pain_on);
                                            $track=0;

                                            for($i=1;$i<=6;$i++){
                                                for($j=0;$j<count($pains);$j++){
                                                    if($i==$pains[$j]){
                                                        $track=1;
                                                        break;
                                                    }
                                                }
                                                if($track==1){
                                                    echo'

                                                    <div class="division text-center">
                                                        <span class="d-block">'.$i.'</span>
                                                        <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                        <br>
                                                        <input '.$checking.' type="checkbox" name="pain_teeth[]" value="'.$i.'">
                                                    </div>
                                                    
                                                    ';
                                                    $track=0;
                                                }
                                                else{
                                                    echo'

                                                    <div class="division text-center">
                                                        <span class="d-block">'.$i.'</span>
                                                        <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                        <br>
                                                        <input type="checkbox" name="pain_teeth[]" value="'.$i.'">
                                                    </div>
                                                    
                                                    ';

                                                }
                                            }

                                        ?>

                                         


                                        </div>
                                        <div class="halfs d-flex">


                                        <?php

                                            for($i=7;$i<=11;$i++){
                                                for($j=0;$j<count($pains);$j++){
                                                    if($i==$pains[$j]){
                                                        $track=1;
                                                        break;
                                                    }
                                                }
                                                if($track==1){
                                                    echo'

                                                    <div class="division text-center">
                                                        <span class="d-block">'.$i.'</span>
                                                        <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                        <br>
                                                        <input '.$checking.' type="checkbox" name="pain_teeth[]" value="'.$i.'">
                                                    </div>
                                                    
                                                    ';
                                                    $track=0;
                                                }
                                                else{
                                                    echo'

                                                    <div class="division text-center">
                                                        <span class="d-block">'.$i.'</span>
                                                        <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                        <br>
                                                        <input type="checkbox" name="pain_teeth[]" value="'.$i.'">
                                                    </div>
                                                    
                                                    ';

                                                }
                                            }


                                        ?>

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



                                        <?php

                                        $up_left = $row['upper_left'];
                                        $pains = explode("-",$up_left);
                                        $track=0;

                                            for($i=8;$i>=1;$i--){
                                                for($j=0;$j<count($pains);$j++){
                                                    if($i==$pains[$j]){
                                                        $track=1;
                                                        break;
                                                    }
                                                }
                                                if($track==1){
                                                    echo'

                                                    <div class="division text-center">
                                                        <span class="d-block">'.$i.'</span>
                                                        <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                        <br>
                                                        <input '.$checking.' type="checkbox" name="up_left_teeth[]" value="'.$i.'">
                                                    </div>
                                                    
                                                    ';
                                                    $track=0;
                                                }
                                                else{
                                                    echo'

                                                    <div class="division text-center">
                                                        <span class="d-block">'.$i.'</span>
                                                        <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                        <br>
                                                        <input type="checkbox" name="up_left_teeth[]" value="'.$i.'">
                                                    </div>
                                                    
                                                    ';

                                                }
                                            }


                                            ?>


                                        </div>
                                    </div>

                                </div>
                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec">
                                            <p class="px-4 py-2">Upper Right</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">


                                        <?php

                                    $up_right = $row['upper_right'];
                                    $pains = explode("-",$up_right);
                                    $track=0;

                                        for($i=1;$i<=8;$i++){
                                            for($j=0;$j<count($pains);$j++){
                                                if($i==$pains[$j]){
                                                    $track=1;
                                                    break;
                                                }
                                            }
                                            if($track==1){
                                                echo'

                                                <div class="division text-center">
                                                    <span class="d-block">'.$i.'</span>
                                                    <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                    <br>
                                                    <input '.$checking.' type="checkbox" name="up_right_teeth[]" value="'.$i.'">
                                                </div>
                                                
                                                ';
                                                $track=0;
                                            }
                                            else{
                                                echo'

                                                <div class="division text-center">
                                                    <span class="d-block">'.$i.'</span>
                                                    <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                    <br>
                                                    <input type="checkbox" name="up_right_teeth[]" value="'.$i.'">
                                                </div>
                                                
                                                ';

                                            }
                                        }


    ?>

                                         

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

                                        
                                        <?php

                                    $low_left = $row['lower_left'];
                                    $pains = explode("-",$low_left);
                                    $track=0;

                                        for($i=8;$i>=1;$i--){
                                            for($j=0;$j<count($pains);$j++){
                                                if($i==$pains[$j]){
                                                    $track=1;
                                                    break;
                                                }
                                            }
                                            if($track==1){
                                                echo'

                                                <div class="division text-center">
                                                    <span class="d-block">'.$i.'</span>
                                                    <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                    <br>
                                                    <input '.$checking.' type="checkbox" name="low_left_teeth[]" value="'.$i.'">
                                                </div>
                                                
                                                ';
                                                $track=0;
                                            }
                                            else{
                                                echo'

                                                <div class="division text-center">
                                                    <span class="d-block">'.$i.'</span>
                                                    <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                    <br>
                                                    <input type="checkbox" name="low_left_teeth[]" value="'.$i.'">
                                                </div>
                                                
                                                ';

                                            }
                                        }


    ?>


                                        


                                        </div>
                                    </div>

                                </div>
                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec">
                                            <p class="px-4 py-2">Lower Right</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                         <?php

                                            $low_right = $row['lower_right'];
                                            $pains = explode("-",$low_right);
                                            $track=0;

                                                for($i=1;$i<=8;$i++){
                                                    for($j=0;$j<count($pains);$j++){
                                                        if($i==$pains[$j]){
                                                            $track=1;
                                                            break;
                                                        }
                                                    }
                                                    if($track==1){
                                                        echo'

                                                        <div class="division text-center">
                                                            <span class="d-block">'.$i.'</span>
                                                            <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                            <br>
                                                            <input '.$checking.' type="checkbox" name="low_right_teeth[]" value="'.$i.'">
                                                        </div>
                                                        
                                                        ';
                                                        $track=0;
                                                    }
                                                    else{
                                                        echo'

                                                        <div class="division text-center">
                                                            <span class="d-block">'.$i.'</span>
                                                            <img src="Images/white-teeth.png" alt="teeth" width="45">
                                                            <br>
                                                            <input type="checkbox" name="low_right_teeth[]" value="'.$i.'">
                                                        </div>
                                                        
                                                        ';

                                                    }
                                                }


?>



                                          

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

                                        <?php
                                $values_arr = array("1","2","3","4","5","6","7","U","L1","L2","R");
                                $database_value = $row['BDR'];
                                $database_values = explode("-",$database_value);
                                $cheked=0;
                                $checking = "checked";
                                
                                for($i=0;$i<count($values_arr);$i++){
                                    for($j=0;$j<count($database_values);$j++){

                                        if($values_arr[$i]==$database_values[$j]){
                                            $cheked=1;
                                            break;
                                        }
                                    }
                                    if($cheked==1){

                                        if($values_arr[$i]=="L1" || $values_arr[$i]=="L2"){

                                            echo '
                                             <span class="d-block me-3">L <input '.$checking.' type="checkbox" name="bdr[]"
                                                value="'.$values_arr[$i].'"></span>

                                            ';

                                        }
                                        else{
                                            echo '
                                                <span class="d-block me-3">'.$values_arr[$i].' <input '.$checking.' type="checkbox" name="bdr[]"
                                                    value="'.$values_arr[$i].'"></span>

                                            ';
                                        }
                                        $cheked=0;
                                    }
                                    else{
                                        if($values_arr[$i]=="L1" || $values_arr[$i]=="L2"){
                                        echo '
                                             <span class="d-block me-3">L <input type="checkbox" name="bdr[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                        }
                                        else{
                                            echo '
                                            <span class="d-block me-3">'.$values_arr[$i].' <input type="checkbox" name="bdr[]"
                                               value="'.$values_arr[$i].'"></span>
                                       ';
                                        }
                                    }
                                }
                            ?>


                                        </div>
                                    </div>

                                </div>
                                <div class="pain  mt-4 d-flex justify-content-center">
                                    <div class="info-2 info-teeth-2">
                                        <div class="head-sec head-sec-2">
                                            <p class="px-4 py-2">BDC</p>
                                        </div>
                                        <div class="body-sec px-4 py-1 pb-3 d-flex justify-content-center">

                                        <?php
                                $values_arr = array("1","2","3","4","5","6","7","U","L1","L2","R");
                                $database_value = $row['BDC'];
                                $database_values = explode("-",$database_value);
                                $cheked=0;
                                $checking = "checked";
                                
                                for($i=0;$i<count($values_arr);$i++){
                                    for($j=0;$j<count($database_values);$j++){

                                        if($values_arr[$i]==$database_values[$j]){
                                            $cheked=1;
                                            break;
                                        }
                                    }
                                    if($cheked==1){

                                        if($values_arr[$i]=="L1" || $values_arr[$i]=="L2"){

                                            echo '
                                             <span class="d-block me-3">L <input '.$checking.' type="checkbox" name="bdc[]"
                                                value="'.$values_arr[$i].'"></span>

                                            ';

                                        }
                                        else{
                                            echo '
                                                <span class="d-block me-3">'.$values_arr[$i].' <input '.$checking.' type="checkbox" name="bdc[]"
                                                    value="'.$values_arr[$i].'"></span>

                                            ';
                                        }
                                        $cheked=0;
                                    }
                                    else{
                                        if($values_arr[$i]=="L1" || $values_arr[$i]=="L2"){
                                        echo '
                                             <span class="d-block me-3">L <input type="checkbox" name="bdc[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                        }
                                        else{
                                            echo '
                                            <span class="d-block me-3">'.$values_arr[$i].' <input type="checkbox" name="bdc[]"
                                               value="'.$values_arr[$i].'"></span>
                                       ';
                                        }
                                    }
                                }
                            ?>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="last-foot mt-5">

                            <?php
                                $values_arr = array("Attrition","Abration","Irrotion");
                                $database_value = $row['problem_summary'];
                                $database_values = explode("-",$database_value);
                                $cheked=0;
                                $checking = "checked";
                                
                                for($i=0;$i<count($values_arr);$i++){
                                    for($j=0;$j<count($database_values);$j++){

                                        if($values_arr[$i]==$database_values[$j]){
                                            $cheked=1;
                                            break;
                                        }
                                    }
                                    if($cheked==1){
                                        echo '
                                             <span>'.$values_arr[$i].' <input '.$checking.' type="checkbox" name="final_problem[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                        $cheked=0;
                                    }
                                    else{
                                        echo '
                                             <span>'.$values_arr[$i].' <input type="checkbox" name="final_problem[]"
                                                value="'.$values_arr[$i].'"></span>
                                        ';
                                    }
                                }
                            ?>


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
                                <input id="t_cost" name="t_cost" type="text" value="<?php echo $row['total'] ?>">
                            </div>
                            <div class="input-box">
                                <label for="due">Due</label><br>
                                <input id="due" name="due" type="text" value="<?php echo $row['due'] ?>">
                            </div>

                        </div>
                        <div class="inputs d-flex justify-content-around">

                            <div class="input-box">
                                <label for="v_date">Next Visit</label><br>
                                <input style="padding:4px 20px;" id="v_date" name="v_date" type="date" value="<?php echo $row['next_visit'] ?>">
                            </div>
                            <div class="input-box">
                                <label for="a_date">Date of Appointment</label><br>
                                <input style="padding:4px 20px;" id="a_date" name="a_date" type="date" value="<?php echo $row['appointmen_date'] ?>">
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
                <a href="generatepdf.php?id=<?php echo $row['patient_id'] ?>" class="btn uni-color">Generate PDF</a>
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
                       Patient Information is Updated.
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



    <script src="JS/updatePatient.js"></script>


    <!-- fontawesome link  -->
    <script src="https://kit.fontawesome.com/72a8635200.js" crossorigin="anonymous"></script>
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>