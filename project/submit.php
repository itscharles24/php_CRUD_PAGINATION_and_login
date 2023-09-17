<?php

include 'db_conn.php';

session_start();

if(isset($_SESSION['info'])){

    extract($_SESSION['info']);

    $sql = mysqli_query($conn,"INSERT into `person_info` (first_name,middle_name,last_name,age,gender,status,street,barangay,municipality,postal_code,province,region) VALUES ('$first_name','$middle_name','$last_name','$age','$gender','$status','$street','$barangay','$municipality','$postal_code','$province','$region')");

    if($sql){
        unset($_SESSION['info']);

       header('location:index.php');
    }else{
        echo mysqli_error($conn);
    }

}

?>