<?php
include 'header.php';
include 'db_conn.php';

session_start();
?>

<div class="box1">
    <h2 style="text-align:center; color:green;">ALL INFO</h2>
    <div>
        <a href="personal.php" style="background:blue; padding:10px; float:right; text-decoration:none; color:white; border-radius:10px;">ADD DETAIL</a>
    </div>
</div>
<br>
<br>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>PERSON</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>STATUS</th>
            <th>ADDRESS</th>
            <th>POSTAL CODE</th>
            <th>PROVINCE</th>
            <th>REGION</th>
            <th style="text-align:center;">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'db_conn.php';

            $query = "select * from `person_info`";

            $result = mysqli_query($conn,$query);
            $number = 1;

            if(!$result){
                die("query failed" . mysqli_error());
            } else {
                while($row = mysqli_fetch_assoc($result)){
                   
                    echo '<tr>';
                    echo '<td scope="row">' . $number . '</td>';
                    echo '<td>' . $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'] . '</td>';
                    echo '<td>' . $row['age'] . '</td>';
                    echo '<td>' . $row['gender'] . '</td>';
                    echo '<td>' . $row['status'] . '</td>';
                    echo '<td>' . $row['street'] . ', ' . $row['barangay'] . ' ' . $row['municipality'] . '</td>';
                    echo '<td>' . $row['postal_code'] . '</td>';
                    echo '<td>' . $row['province'] . '</td>';
                    echo '<td>' . $row['region'] . '</td>';

                    ?>

                <td style="text-align: center;"><a href="update_page_.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a> <br>
               <a href="delete_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>

                  <?php
                    $number++;
                }
            }
        ?>
    </tbody>
</table>

 

<?php include 'footer.php'; ?>