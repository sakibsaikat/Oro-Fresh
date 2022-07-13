<?php

include "config.php";


$update_id = $_POST['update_id'];


$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$contact = $_POST['cno'];
$referrence = $_POST['ref'];
$area = $_POST['area'];

$med_history = NULL;
$treatment = NULL;
$problems = NULL;
$pain_on = NULL;
$upper_left = NULL;
$upper_right = NULL;
$low_left = NULL;
$low_left = NULL;
$bdr = NULL;
$bdc = NULL;
$pres_name = NULL;
$final_problem = NULL;

$pres_status=0;

if(isset($_POST['med_history'])){

    $med_history = $_POST['med_history'];
    $medical_history="";

    for($i=0;$i<count($med_history);$i++){
        $medical_history.= $med_history[$i];

        if(count($med_history)>0 && $i<count($med_history)-1){
            $medical_history.='-';
        }
    }

}


if(isset($_POST['treatment'])){

    $treat = $_POST['treatment'];
    $treatment="";

    for($i=0;$i<count($treat);$i++){
        $treatment.= $treat[$i];

        if(count($treat)>0 && $i<count($treat)-1){
            $treatment.='-';
        }
    }
}

if(isset($_POST['problems'])){

    $prob = $_POST['problems'];
    $problems="";

    for($i=0;$i<count($prob);$i++){
        $problems.= $prob[$i];

        if(count($prob)>0 && $i<count($prob)-1){
            $problems.='-';
        }
    }

}


if(isset($_POST['opinion-1'])){
    $past_case_history = $_POST['opinion-1'];
}
if(isset($_POST['opinion-2'])){
    $radiological_history = $_POST['opinion-2'];
}



if(isset($_POST['pain_teeth'])){

    $pain_teeth = $_POST['pain_teeth'];
    $pain_on="";

    for($i=0;$i<count($pain_teeth);$i++){
        $pain_on.= $pain_teeth[$i];

        if(count($pain_teeth)>0 && $i<count($pain_teeth)-1){
            $pain_on.='-';
        }
    }
}


if(isset($_POST['up_left_teeth'])){

    $upper_l = $_POST['up_left_teeth'];
    $upper_left="";

    for($i=0;$i<count($upper_l);$i++){
        $upper_left.= $upper_l[$i];

        if(count($upper_l)>0 && $i<count($upper_l)-1){
            $upper_left.='-';
        }
    }
}

if(isset($_POST['up_right_teeth'])){

    $upper_r = $_POST['up_right_teeth'];
    $upper_right="";

    for($i=0;$i<count($upper_r);$i++){
        $upper_right.= $upper_r[$i];

        if(count($upper_r)>0 && $i<count($upper_r)-1){
            $upper_right.='-';
        }
    }
}

if(isset($_POST['low_left_teeth'])){

    $low_l = $_POST['low_left_teeth'];
    $low_left="";

    for($i=0;$i<count($low_l);$i++){
        $low_left.= $low_l[$i];

        if(count($low_l)>0 && $i<count($low_l)-1){
            $low_left.='-';
        }
    }
}

if(isset($_POST['low_right_teeth'])){

    $low_r = $_POST['low_right_teeth'];
    $low_right="";

    for($i=0;$i<count($low_r);$i++){
        $low_right.= $low_r[$i];

        if(count($low_r)>0 && $i<count($low_r)-1){
            $low_right.='-';
        }
    }
}

if(isset($_POST['bdr'])){

    $bdrs = $_POST['bdr'];
    $bdr="";

    for($i=0;$i<count($bdrs);$i++){
        $bdr.= $bdrs[$i];

        if(count($bdrs)>0 && $i<count($bdrs)-1){
            $bdr.='-';
        }
    }
}
if(isset($_POST['bdc'])){

    $bdcs = $_POST['bdc'];
    $bdc="";

    for($i=0;$i<count($bdcs);$i++){
        $bdc.= $bdcs[$i];

        if(count($bdcs)>0 && $i<count($bdcs)-1){
            $bdc.='-';
        }
    }
}

if(isset($_POST['final_problem'])){

    $final = $_POST['final_problem'];
    $final_problem="";

    for($i=0;$i<count($final);$i++){
        $final_problem.= $final[$i];

        if(count($final)>0 && $i<count($final)-1){
            $final_problem.='-';
        }
    }
}



$total_cost = $_POST['t_cost'];
$due = $_POST['due'];
$next_visit = $_POST['v_date'];
$ap_date = $_POST['a_date'];


if(isset($_FILES['prescription'])){


    $file_name = $_FILES['prescription']['name'];
    $path = $_FILES['prescription']['tmp_name'];


    $names = explode(".",$file_name);
    $newname = $contact.".".$names[1];

    if(move_uploaded_file($path,"Uploads/".$newname)){
        
        //REST CODES HERE
        $pres_name = $newname;
        $pres_status=1;
       
        
        
    }


}

    if($pres_status==1){
        $sql = "UPDATE patients SET name='{$name}',age='{$age}',sex='{$sex}',contact='{$contact}',area='{$area}',reference='{$referrence}',medical_history='{$medical_history}',treatment='{$treatment}',problem='{$problems}',past_history='{$past_case_history}',radiology_history='{$radiological_history}',pain_on='{$pain_on}',upper_left='{$upper_left}',upper_right='{$upper_right}',lower_left='{$low_left}',lower_right='{$low_right}',BDR='{$bdr}',BDC='{$bdc}',problem_summary='{$final_problem}',total='{$total_cost}',due='{$due}',next_visit='{$next_visit}',appointmen_date='{$ap_date}',prescription='{$pres_name}' WHERE patient_id='{$update_id}'";

    }
    else{
        $sql = "UPDATE patients SET name='{$name}',age='{$age}',sex='{$sex}',contact='{$contact}',area='{$area}',reference='{$referrence}',medical_history='{$medical_history}',treatment='{$treatment}',problem='{$problems}',past_history='{$past_case_history}',radiology_history='{$radiological_history}',pain_on='{$pain_on}',upper_left='{$upper_left}',upper_right='{$upper_right}',lower_left='{$low_left}',lower_right='{$low_right}',BDR='{$bdr}',BDC='{$bdc}',problem_summary='{$final_problem}',total='{$total_cost}',due='{$due}',next_visit='{$next_visit}',appointmen_date='{$ap_date}' WHERE patient_id='{$update_id}'";
    }


  

    $result = mysqli_query($con,$sql);

    if($result){
        echo "ok";
    }
    else{
        echo "denied";
    }








?>