<?php

    include "config.php";


    require __DIR__."/vendor/autoload.php";

    use Dompdf\Dompdf;
    use Dompdf\Options;
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM patients WHERE patient_id=".$id;
        $result = mysqli_query($con,$sql);
    }

    if(isset($_GET['idz'])){
        $id = $_GET['idz'];

        $sql = "SELECT * FROM patients WHERE contact=".$id;
        $result = mysqli_query($con,$sql);
    }

    date_default_timezone_set('Asia/Dhaka');
    $date = date('d-m-y');
    $times = date('h:i:sa');

 
    $options = new Options;
    $options->setChroot(__DIR__);

    $pdfs = new Dompdf();

    $pdfs->setOptions($options);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){


            // Medical History 

            $values_arr = array("Diabetics","Heart Diseases","Kindey Diseases","Hepatities","Drug Reaction");
            $database_value = $row['medical_history'];

            $database_values = explode("-",$database_value);
            $med_his = array();
            

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
                   array_push($med_his,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($med_his," --- ");
                   
                }
            }


            // Problems 

            $values_arr = array("Calculass Plaque, Stain, Stone","Gum Bleeding","Foul Odor");
            $database_value = $row['problem'];

            $database_values = explode("-",$database_value);
            $prblms = array();
            

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
                   array_push($prblms,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($prblms," --- ");
                   
                }
            }


            //Treatment
            
            $values_arr = array("Resoration","Conservetives","Endodontics","Prosthodontics","Orthodontics","Surgery","Periodontics","Prevention","Medication","Asthetics");
            $database_value = $row['treatment'];

            $database_values = explode("-",$database_value);
            $treat = array();
            

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
                   array_push($treat,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($treat," --- ");
                   
                }
            }

            //Pain On
            $values_arr = array("1","2","3","4","5","6","7","8","9","10","11");
            $database_value = $row['pain_on'];

            $database_values = explode("-",$database_value);
            $pains = array();
            

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
                   array_push($pains,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($pains," --- ");
                   
                }
            }


      
            //Upper Left
            $values_arr = array("1","2","3","4","5","6","7","8");
            $database_value = $row['upper_left'];

            $database_values = explode("-",$database_value);
            $u_left = array();
            

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
                   array_push($u_left,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($u_left," --- ");
                   
                }
            }


      
            //Upper Right
            $values_arr = array("1","2","3","4","5","6","7","8");
            $database_value = $row['upper_right'];

            $database_values = explode("-",$database_value);
            $u_right = array();
            

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
                   array_push($u_right,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($u_right," --- ");
                   
                }
            }


      
            //Lower Left
            $values_arr = array("1","2","3","4","5","6","7","8");
            $database_value = $row['lower_left'];

            $database_values = explode("-",$database_value);
            $l_left = array();
            

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
                   array_push($l_left,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($l_left," --- ");
                   
                }
            }


      
            //Lower Right
            $values_arr = array("1","2","3","4","5","6","7","8");
            $database_value = $row['lower_right'];

            $database_values = explode("-",$database_value);
            $l_right = array();
            

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
                   array_push($l_right,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($l_right," --- ");
                   
                }
            }

            //BDR
            $values_arr = array("1","2","3","4","5","6","7","U","L1","L2","R");
            $database_value = $row['BDR'];

            $database_values = explode("-",$database_value);
            $bdr = array();
            

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
                   array_push($bdr,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($bdr," --- ");
                   
                }
            }

            //BDC
            $values_arr = array("1","2","3","4","5","6","7","U","L1","L2","R");
            $database_value = $row['BDC'];
            $database_values = explode("-",$database_value);
            $bdc = array();
            

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
                   array_push($bdc,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($bdc," --- ");
                   
                }
            }

            //Problem Summary
            $values_arr = array("Attrition","Abration","Irrotion");
            $database_value = $row['problem_summary'];

            $database_values = explode("-",$database_value);
            $ps = array();
            

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
                   array_push($ps,"Yes");

                    $cheked=0;
                }
                else{

                    array_push($ps,"No");
                   
                }
            }


      



    $htm = '
            

            <div style="width:95%; margin:0 auto;">
            
                <div style="width:50%;float:left">
                <img src="Images/logopdf.png" alt="logo" width="100">
                </div>
                <div style="width:50%;float:left;text-align:right">
                <h2 style=" color: #203043;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;">Oro Fresh Dental Care<h5>
                <address style="font-size:10px;color: #203043;">68, Mohakhali Community Center Marker, Shop 5 & 6<br>
                    Gulshan Dhaka-1212 || Cell: 01723-456789
                </address>
                </div>
            </div>
             
            <div class="personal-details" style="font-family: \'Courier New\', Courier, monospace;clear:both;color: #252627; font-size:12px;font-weight:bold;width:97%;margin:0 auto;">
                
            <span style="text-align: left;display:block;padding:3px 10px;">Name: '.$row['name'].'</span>
                <div class="three">
                    <span style="width:33%;text-align:left;padding:3px 10px;display:block;float:left;">Age: '.$row['age'].'</span>
                    <span style="width:33%;text-align:left;padding:3px 10px;display:block;float:left;">Sex: '.$row['sex'].'</span>
                    <span style="width:33%;text-align:left;padding:3px 0px;padding-right:20px;display:block;float:left;">Contact: '.$row['contact'].'</span>
                </div>
                <span style="text-align: left;display:block;padding:3px 10px;margin-top:5px;">Reference: '.$row['reference'].'</span>
                <span style="text-align: left;display:block;padding:3px 10px;margin-top:0px;">Area: '.$row['area'].'</span>

            </div>

            <div class="med">
                <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;">Medical History</span>
                <table style="font-size:10px;margin:0 auto;margin-top:15px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                    <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Diabetics</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Heart Diseases</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Kidney Diseases</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Hepatities</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Drug Addiction</th>
                    </tr>
                    <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$med_his[0].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$med_his[1].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$med_his[2].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$med_his[3].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$med_his[4].'</td>
                    </tr>
                </table>
            </div>



            <div class="problem" style="margin-top:15px;">
                <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;">Problem</span>
                <table style="font-size:10px;margin:0 auto;margin-top:15px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                    <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Calculass Plaque, Stain, Stone</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Gum Bleeding</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Foul Odor</th>

                    </tr>
                    <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$prblms[0].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$prblms[1].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$prblms[2].'</td>

                </table>
            </div>

            <div class="treatment" style="margin-top:15px;">
                <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;">Treatment</span>
                <table style="font-size:10px;margin:0 auto;margin-top:15px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                    <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Resoration</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Conservetives</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Endodontics</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Prosthodontics</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Orthodontics</th>
                    
                    </tr>
                    <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[0].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[1].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[2].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[3].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[4].'</td>

                </table>
                <table style="font-size:10px;margin:0 auto;margin-top:0px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                    <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Surgery</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Periodontics</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Prevention</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Medication</th>
                        <th style="padding:8px 20px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Asthetics</th>

                    </tr>
                    <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[5].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[6].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[7].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[8].'</td>
                        <td style="padding:8px 20px;text-align:center;background-color: #e3e4e5;">'.$treat[9].'</td>

                </table>
            </div>

            <div class="problem" style="margin:20px 0px;">

            <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;width:50%;float:left;">Past Case History: '.$row['past_history'].'</span>
            <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;width:50%;float:left;">Radiological History: '.$row['radiology_history'].'</span>
          
            </div>





            <div class="problem" style="margin-top:15px;clear:both;margin-top:0px;">
            <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;">Pain On</span>
            <table style="font-size:10px;margin:0 auto;margin-top:15px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">One</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Two</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Three</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Four</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Five</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Six</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Seven</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Eight</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Nine</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Ten</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Eleven</th>

                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[0].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[1].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[2].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[3].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[4].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[5].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[6].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[7].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[8].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[9].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$pains[10].'</td>
             

            </table>
        </div>
            <div class="problem" style="margin-top:15px;clear:both;margin-top:0px;">
            <table style="font-size:10px;margin:0 auto;margin-top:15px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Position</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">One</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Two</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Three</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Four</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Five</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Six</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Seven</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Eight</th>

                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">Upper Left</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[0].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[1].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[2].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[3].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[4].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[5].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[6].'</td>
                <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_left[7].'</td>
                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">Upper Right</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[0].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[1].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[2].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[3].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[4].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[5].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[6].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$u_right[7].'</td>
                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">Lower Left</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[0].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[1].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[2].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[3].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[4].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[5].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[6].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_left[7].'</td>
                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">Lower Right</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[0].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[1].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[2].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[3].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[4].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[5].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[6].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$l_right[7].'</td>
                </tr>
  
         

            </table>
            <div class="problem" style="margin-top:15px;clear:both;margin-top:40px;">
            <table style="font-size:10px;margin:0 auto;margin-top:15px;width:95%;border:2px solid #0658b5;border-collapse:collapse;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif">
                <tr style="border:2px solid #0658b5;border-collapse:collapse;">
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Name</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">One</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Two</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Three</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Four</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Five</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Six</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">Seven</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">U</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">L</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">L</th>
                    <th style="padding:8px 10px;text-align:center;background-color: #0658b5;color: white;border: 2px solid #0658b5;border-collapse: collapse;">R</th>

                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">BDR</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[0].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[1].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[2].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[3].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[4].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[5].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[6].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[7].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[8].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[9].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdr[10].'</td>
                </tr>
                <tr style="border:2px solid #e3e4e5;border-collapse:collapse; font-weight: bold;color: rgb(31, 30, 30);">
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">BDC</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[0].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[1].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[2].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[3].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[4].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[5].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[6].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[7].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[8].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[9].'</td>
                    <td style="padding:8px 10px;text-align:center;background-color: #e3e4e5;">'.$bdc[10].'</td>
                </tr>
             
         

            </table>
        </div>

        <div class="problem" style="margin:30px 0px;">

        <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;width:33%;float:left;">Attrition: '.$ps[0].'</span>
        <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;width:33%;float:left;">Abration: '.$ps[1].'</span>
        <span style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-size:12px;font-weight:bolder;text-align: center;display: block;width:33%;float:left;">Irrotion: '.$ps[2].'</span>
      
        </div>
        <div class="problem" style="margin:30px 0px;margin-top:50px;">

        <span style="font-size:18px;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-weight:bolder;display: block;text-align:center">Payment & Visit</span>
        
        <div style="width:35%;margin:30px auto;">
        <span style="font-size:14px;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-weight:bolder;display: block;">Total: '.$row['total'].'</span>
        <span style="font-size:14px;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-weight:bolder;display: block;">Due: '.$row['due'].'</span>
        <span style="font-size:14px;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-weight:bolder;display: block;">Date of Appointment: '.$row['next_visit'].'</span>
        <span style="font-size:14px;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-weight:bolder;display: block;">Next Visit: '.$row['appointmen_date'].'</span>
       
      
        </div>
        </div>

        <div class="problem" style="margin:30px 0px;margin-top:50px;text-align:right;">

        <span style="width:200px;float:right;border-top:2px solid black;font-size:14px;font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;font-weight:bolder;display: block;text-align-right;">Signature</span>
     
        </div>

        <div style="text-align:center;margin-top:100px;">
        <code>Generated: '.$date.' Time: '.$times.'<code>
        </div>
            

           
    ';
        }
    }

    $pdfs->loadHtml($htm);
    $pdfs->render();

    $pdfs->stream("Invoice.pdf",["Attachment" => 0]);


?>