  <?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "students";

   $conn = mysqli_connect($servername,$username,$password,$database);

   if(!$conn){
    die ("failed to connect".mysqli_error($conn));
   }

?>