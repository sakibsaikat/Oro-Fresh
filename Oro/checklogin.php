<?php

    include "config.php";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['username']==$user && $row['password']==$pass){
                session_start();
                $_SESSION["username"]=$row['username'];
                header("Location: dashboard.php");
                
            }
        }
    }


?>