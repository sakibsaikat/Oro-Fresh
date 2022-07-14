<?php

    $con = mysqli_connect("localhost","root","","ajax");

    if(!$con){
        die("Connection Lost.");
    }

    if(isset($_POST['age'])){
        
        $name = $_POST['name'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];

        // kisu kaj hbe
        $sql = "INSERT INTO info(name,age,contact) VALUES('{$name}','{$age}','{$contact}')";
        $result = mysqli_query($con,$sql);

        if($result){
            // echo '<h1 style="text-align:center">Your Data is Submitted</h1>';
            echo "ok";
            // header("Location: index.html");
        }
        else{
            echo "server denied";
        }


        
    

    }

?>