<?php  
  
  include 'db_conn.php';

  if(isset($_GET['id'])){

     $id = $_GET['id'];
  }

  $query = "DELETE from `person_info` WHERE `id` = '$id'";
 
  
  $result = mysqli_query($conn,$query); 

  if(!$result){
    die ("Query failed" . mysqli_error());
  }
  else{
    header ('location:index.php');
  }




?>