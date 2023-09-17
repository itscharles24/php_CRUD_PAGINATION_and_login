<?php

include 'header.php';
include 'footer.php';
session_start();


if(isset($_POST['next'])){
    foreach ($_POST as $key => $value)
    {
        $_SESSION['info'][$key] = $value;
    }

    $keys = array_keys($_SESSION['info']);

    if(in_array('next',$keys)){
        unset($_SESSION['info']['next']);
    }

    header('location:region.php');
}


?>
<br>
<br>
<br>

<form action="" method="POST">
    <div style="text-align:center;">
        <h2>ADDRESS</h2>
    <label>street</label>
    <input type="text" name="street"  value="<?= isset($_SESSION['info']['street']) ? $_SESSION['info']['street'] : ''?>" placeholder="enter your street"> <br>
        <label>baranggay</label>
    <input type="text" name="barangay"  value="<?= isset($_SESSION['info']['barangay']) ? $_SESSION['info']['barangay'] : ''?>" placeholder="enter your barangay"> <br>
        <label>municipality</label>
    <input type="text" name="municipality"  value="<?= isset($_SESSION['info']['municipality']) ? $_SESSION['info']['municipality'] : ''?>" placeholder="enter your municipality"> <br>
        <label>postal code</label>
    <input type="text" name="postal_code"  value="<?= isset($_SESSION['info']['postal_code']) ? $_SESSION['info']['postal_code'] : ''?>" placeholder="enter your postal code"> <br>
        <label>province</label>
    <input type="text" name="province"  value="<?= isset($_SESSION['info']['province']) ? $_SESSION['info']['province'] : ''?>" placeholder="enter your province"> <br>
     <a href="status.php" class="btn btn-secondary" style="padding:1px;">Previous</a>
    <input type="submit" class="btn btn-primary" name="next" value="next">
    </div>
</form>