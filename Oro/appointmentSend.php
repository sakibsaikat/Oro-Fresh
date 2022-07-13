<?php
    include "newconfig.php";

    $name = $_POST['p_name'];
    $ap_date = $_POST['ap_date'];
    $contact = $_POST['p_contact'];

    $sql = "INSERT INTO appointment(name,ap_date,contact) VALUES('{$name}','{$ap_date}','{$contact}')";

    $result = mysqli_query($con,$sql);

    if($result){
        echo "ok";
    }
    else{
        echo "denied";
    }

    // mysqli_close($con);

    


?>