<?php 

include('header.php');
include 'db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

     $query = "select * FROM `person_info` WHERE `id`= '$id'";

     $result = mysqli_query($conn,$query);

         if(!$result){
                die("query failed" . mysqli_error());
            }   
            else{
                $row = mysqli_fetch_assoc($result);
            }
}

?>

<?php


    if(isset($_POST['update'])){
        
        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }
          $first_name = $_POST['first_name'];
          $middle_name = $_POST['middle_name'];
          $last_name = $_POST['last_name'];
          $age = $_POST['age'];
          $gender = $_POST['gender'];
          $status = $_POST['status'];
          $street = $_POST['street'];
          $barangay = $_POST['barangay'];
          $municipality = $_POST['municipality'];
          $postal_code = $_POST['postal_code'];
          $province = $_POST['province'];
          $region = $_POST['region'];


          $query = "UPDATE `person_info` set  `first_name` = '$first_name', `middle_name` = '$middle_name', `last_name` = '$last_name',`age` = '$age', `gender` = '$gender', `status` = '$status', `street` = '$street', `barangay` = '$barangay',`municipality`= '$municipality',`postal_code`='$postal_code',`province`= '$province',`region`= '$region' WHERE   `id` = '$idnew'";

          $result = mysqli_query($conn,$query);

         if(!$result){
                die("query failed" . mysqli_error());
            } 
            else{
               header('location:index.php');
            }
    }
?>
<br>
<h2 style="text-align:center;color:green;">update information</h2>

<form action="update_page_.php?id_new=<?php echo $id; ?>" method="POST">
      <div  style="text-align:center;">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"><br>

        <label>Middle Name:</label>
        <input type="text"  name="middle_name" value="<?php echo $row['middle_name'] ?>"><br>

        <label>Last Name:</label>
        <input type="text"  name="last_name" value="<?php echo $row['last_name'] ?>"><br>

        <label>Age:</label>
        <input type="number"  name="age" value="<?php echo $row['age'] ?>"><br>

        <label>Gender:</label>
        <input type="radio" name="gender"  value="Male"
        <?php
         if($row['gender']== "Male"){
            echo "checked";
         } 
         ?>
        > Male
        <input type="radio" name="gender"  value="Female"        <?php
         if($row['gender']== "Female"){
            echo "checked";
         }
         ?>> Female<br>

        <label>Status:</label>
        <input type="text" name="status" value="<?php echo $row['status'] ?>"><br>

        <label>Street:</label>
        <input type="text"  name="street" value="<?php echo $row['street'] ?>"><br>

        <label>Barangay:</label>
        <input type="text" name="barangay" value="<?php echo $row['barangay'] ?>"><br>

        <label>Municipality:</label>
        <input type="text"  name="municipality" value="<?php echo $row['municipality'] ?>"><br>

        <label>Postal Code:</label>
        <input type="text"  name="postal_code" value="<?php echo $row['postal_code'] ?>"><br>

        <label>Province:</label>
        <input type="text" name="province" value="<?php echo $row['province'] ?>"><br>

        <label>Region:</label>
        <select name="region"  style="width:300px;">
            <option style="text-align:center;color:red;">Select Region</option>
            <option value="Region I" <?php if($row['region'] == 'Region I'){ echo "selected";}  ?>>Ilocos Region I</option>
            <option value="Region II"<?php if($row['region'] == 'Region II'){ echo "selected";}  ?>>Cagayan Valley II</option>
             <option value="Region III"<?php if($row['region'] == 'Region III'){ echo "selected";}  ?>>Central Luzon III</option>
     <option value="Region IV-A"<?php if($row['region'] == 'Region IV-A'){ echo "selected";}  ?>>CALABARZON IV-A</option>
     <option value="Region IV-B"<?php if($row['region'] == 'Region IV-B'){ echo "selected";}  ?>>MIMAROPA IV-B</option>
     <option value="Region V"<?php if($row['region'] == 'Region V'){ echo "selected";}  ?>>Bicol Region V</option>
     <option value="Region VI"<?php if($row['region'] == 'Region VI'){ echo "selected";}  ?>>Western Visayas VI</option>
     <option value="Region VII"<?php if($row['region'] == 'Region VII'){ echo "selected";}  ?>>Central Visayas VII</option>
     <option value="Region VIII"<?php if($row['region'] == 'Region VIII'){ echo "selected";}  ?>>Eastern Visayas VIII</option>
     <option value="Region IX"<?php if($row['region'] == 'Region IX'){ echo "selected";}  ?>>Zamboanga Peninsula IX</option>
     <option value="Region X"<?php if($row['region'] == 'Region IX'){ echo "selected";}  ?>>Northern Mindanao X</option>
     <option value="Region XI"<?php if($row['region'] == 'Region XI'){ echo "selected";}  ?>>Davao Region XI</option>
     <option value="Region XII"<?php if($row['region'] == 'Region XII'){ echo "selected";}  ?>>SOCCSKSARGEN XII</option>
     <option value="Region XIII"<?php if($row['region'] == 'Region XIII'){ echo "selected";}  ?>>Caraga Region XIII</option>
     <option value="BARMM"<?php if($row['region'] == 'BARMM'){ echo "selected";}  ?>>Bangsamoro Autonomous Region in Muslim Mindanao BARMM</option>
     <option value="CAR"<?php if($row['region'] == 'CAR'){ echo "selected";}  ?>>Cordillera Administrative Region CAR</option>
     <option value="NCR"<?php if($row['region'] == 'NCR'){ echo "selected";}  ?>>National Capital Region NCR</option>
        </select><br><br>
      </div>
      <div style="text-align:center;">
       <a href="index.php" class="btn btn-secondary">CLose</a>
        <input type="submit" class="btn btn-success" name="update" value="Update">
      </div>
</form>

<?php  include('footer.php'); ?>