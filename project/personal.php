  <?php
  include 'header.php';
  include 'db_conn.php';


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

    header('location:status.php');
}

?>


<br>
<br>
<br>
      <h2 style="text-align:center;">PERSON</h2>
<div class="person">
    <form action="" method="POST">
        <div class="container">
        </div>
        <div class="info">
            <label for="firstname">first name</label>
            <input type="text" name="first_name" value="<?= isset($_SESSION['info']['first_name']) ? $_SESSION['info']['first_name'] : ''?>" placeholder="enter your first name"> <br>
            <label for="middlename">middle name</label>
            <input type="text" name="middle_name" value="<?= isset($_SESSION['info']['middle_name']) ? $_SESSION['info']['middle_name'] : ''?>"  placeholder="enter your middle name"> <br>
            <label for="lastname">last name</label>
            <input type="text" name="last_name" value="<?= isset($_SESSION['info']['last_name']) ? $_SESSION['info']['last_name'] : ''?>" placeholder="enter your lastname"> <br>
            <label for="age">age</label>
            <input type="number" name="age" value="<?= isset($_SESSION['info']['age']) ? $_SESSION['info']['age'] : ''?>"  placeholder="enter your age"> <br>
          <label for="gender">Gender</label>
          <input type="radio" name="gender" value="male" <?php echo (isset($_SESSION['info'] ['gender']) && $_SESSION['info']['gender'] === 'male') ? 'checked' : ''; ?>> Male
            <input type="radio" name="gender" value="female" <?php echo (isset($_SESSION['info']['gender']) && $_SESSION['info']['gender'] === 'female') ? 'checked' : ''; ?>> Female

            <br>
            <input type="submit" name="next" class="bt btn-primary" value="next">
                
        </div>
    </form>
    </div>

