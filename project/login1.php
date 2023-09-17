<?php
session_start();
include 'db_conn.php';


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * from `user` where username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)== 1){
        $_SESSION['username'] = $username;
        header('location:personal.php');
    }
    else{

        header('location:login1.php?msg=invalid username and password');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title> 
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
</head>
<body>
    
<section class="vh-100" style="background-color: #333;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="border-right:2px solid black;">
              <img src="" ><h4 style="text-align:center;margin-top:150px;">Put some picture here</h4><style="height:100%;border-radius: 20px;"
                alt="login form" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login1.php" method="POST">

                  <!-- <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div> -->

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;text-align:center;font-size:40px;">Login Here</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name="username" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17" >Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27"  name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-dark btn-lg btn-block" name="submit" value="submit">
                  </div>

                                                          <?php
             if (isset($_GET['msg'])) {
                echo "<h6 style='text-align: center; color: red;'>" . $_GET['msg'] . "</h6>";
             }
            ?>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>