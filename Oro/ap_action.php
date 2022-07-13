<?php
    
    ob_start();

    include "newconfig.php";

    if(isset($_POST['ap_id'])){

        $update_id = $_POST['ap_id'];
        $name = $_POST['p_name'];
        $ap_date = $_POST['ap_date'];
        $contact = $_POST['p_contact'];

        $sql = "UPDATE appointment SET name='{$name}',ap_date='{$ap_date}',contact='{$contact}' WHERE appointment_id='{$update_id}'";

        $result = mysqli_query($con,$sql);
        if($result){
            echo "ok";
        }
        
    }

    if(isset($_GET['a_d_id'])){
        $del_id = $_GET['a_d_id'];
        $sql = "DELETE FROM appointment WHERE appointment_id=".$del_id;
        $result = mysqli_query($con,$sql);
        if($result){
            header("Location: appointment.php");
        }
    }


?>