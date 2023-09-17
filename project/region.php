<?php
include 'header.php';
include 'footer.php';

session_start();

if(isset($_POST['submit'])){
    foreach ($_POST as $key => $value)
    {
        $_SESSION['info'][$key] = $value;
    }

    $keys = array_keys($_SESSION['info']);

    if(in_array('submit',$keys)){
        unset($_SESSION['info']['submit']);
    }

    header('location:submit.php');
}
?>

<br>
<br>
<br>

<form action="" method="POST">
    <div style="text-align:center;">
        <h2>REGION</h2>
        <select name="region" style="width:50%;">
            <option value="">Select Region</option>
            <option value="Region I" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region I') ? 'selected' : '' ?>>Ilocos Region I</option>
            <option value="Region II" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region II') ? 'selected' : '' ?>>Cagayan Valley II</option>
            <option value="Region III" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region III') ? 'selected' : '' ?>>Central Luzon III</option>
            <option value="Region IV-A" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region IV-A') ? 'selected' : '' ?>>CALABARZON IV-A</option>
            <option value="Region IV-B" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region IV-B') ? 'selected' : '' ?>>MIMAROPA IV-B</option>
            <option value="Region V" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region V') ? 'selected' : '' ?>>Bicol Region V</option>
            <option value="Region VI" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region VI') ? 'selected' : '' ?>>Western Visayas VI</option>
            <option value="Region VII" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region VII') ? 'selected' : '' ?>>Central Visayas VII</option>
            <option value="Region VIII" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region VIII') ? 'selected' : '' ?>>Eastern Visayas VIII</option>
            <option value="Region IX" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region IX') ? 'selected' : '' ?>>Zamboanga Peninsula IX</option>
            <option value="Region X" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region X') ? 'selected' : '' ?>>Northern Mindanao X</option>
            <option value="Region XI" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region XI') ? 'selected' : '' ?>>Davao Region XI</option>
            <option value="Region XII" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region XII') ? 'selected' : '' ?>>SOCCSKSARGEN XII</option>
            <option value="Region XIII" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'Region XIII') ? 'selected' : '' ?>>Caraga Region XIII</option>
            <option value="BARMM" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'BARMM') ? 'selected' : '' ?>>Bangsamoro Autonomous Region in Muslim Mindanao BARMM</option>
            <option value="CAR" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'CAR') ? 'selected' : '' ?>>Cordillera Administrative Region CAR</option>
            <option value="NCR" <?= (isset($_SESSION['info']['region']) && $_SESSION['info']['region'] === 'NCR') ? 'selected' : '' ?>>National Capital Region NCR</option>
        </select>
        <br>
        <br>
        <a href="address.php" class="btn btn-secondary" style="padding:1px;">Previous</a>
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
    </div>
</form>
