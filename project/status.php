<?php
include 'header.php';
include 'footer.php';
session_start();

if (isset($_POST['next'])) {
    foreach ($_POST as $key => $value) {
        $_SESSION['info'][$key] = $value;
    }

    $keys = array_keys($_SESSION['info']);

    if (in_array('next', $keys)) {
        unset($_SESSION['info']['next']);
    }

    header('location: address.php');
}
?>
<br>
<br>
<br>
<h2 style="text-align:center;">STATUS</h2>
<form action="" method="POST" style="text-align:center;">
    <label for="status"> <br>
        <br> <input type="radio" name="status" value="single" <?= (isset($_SESSION['info']['status']) && $_SESSION['info']['status'] === 'single') ? 'checked' : '' ?>> single
        <br> <input type="radio" name="status" value="widow" <?= (isset($_SESSION['info']['status']) && $_SESSION['info']['status'] === 'widow') ? 'checked' : '' ?>> widow
        <br> <input type="radio" name="status" value="married" <?= (isset($_SESSION['info']['status']) && $_SESSION['info']['status'] === 'married') ? 'checked' : '' ?>> married
        <br> <input type="radio" name="status" value="divorce" <?= (isset($_SESSION['info']['status']) && $_SESSION['info']['status'] === 'divorce') ? 'checked' : '' ?>> divorced
    </label> <br>
    <a href="personal.php" class="btn btn-secondary" style="padding:1px;">Previous</a>
    <input type="submit" name="next" class="bt btn-primary" value="next">
</form>
