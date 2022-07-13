<?php
    //ob_start();
    $con = mysqli_connect("localhost:3306","satrong2_sakib","S@kibtas$1514","satrong2_oro");
    if(!$con){
        die("Database Connection Failed.");
    }
    

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin";
    $result=mysqli_query($con,$sql);
    
    header("Location: home.php");

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['username']==$user && $row['password']==$pass){
                session_start();
                $_SESSION["username"]=$row['username'];
                
                header('Location: dashboard.php');
                //exit();
                
            }
        }
    }
    //ob_end_flush();


?>