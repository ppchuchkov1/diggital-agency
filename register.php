<?php include './includes/header.php'; ?>
<div class="register">
<?php include './includes/navigation.php'; ?>


<div class="container text-center" style="padding-top: 120px;">
<h1 class="mb-3  form-heading">Register</h1>

<?php 
if(isset($_POST['register'])){
    $regUsername = trim($_POST['reg-username']);
    $regPassword = trim($_POST['reg-password']);
    $regPassword = md5($regPassword);
    
    $regUsername = mysqli_real_escape_string($conn,$regUsername);
    $regPassword = mysqli_real_escape_string($conn,$regPassword);


    $regEmail = trim($_POST['reg-email']);
    $regUsername = mysqli_real_escape_string($conn, $regUsername);
    $userRole =  "writer";
    $regDate = date("Y-m-d H:i:s"); 

    if(empty($regUsername) || empty($regPassword) || empty( $regEmail )) {

      echo "Fill All Fields";
  }else{

    $sqlRegister = "
    INSERT INTO users (user_name, user_password, user_email, user_role,date_register) 
    VALUES ('$regUsername', '$regPassword', '$regEmail' ,'$userRole' ,'$regDate')
    ";
  
    $queryRegister = mysqli_query($conn, $sqlRegister);
    if (!$queryRegister) {
        die('QUERY FAILED: ' . mysqli_error($conn));
    }else{
        echo '<p class="text-white">Successful</p>';
    }
}
}


?>

<form action="register.php" method="post">
  <div class="form-group">
    <input type="text" class="form-controls" name="reg-username"  placeholder="Enter Username">
    </div>
  <div class="form-group">
    <input type="password" name="reg-password" class="form-controls"  placeholder="Enter Password">
  </div>
  <div class="form-group">
    <input type="email" name="reg-email" class="form-controls"  placeholder="Enter Email">
  </div>
  
  <button type="submit" class="form-button" name="register">Submit</button>
</form>
</div>

</div>

<!-- Footer -->
<?php include './includes/footer.php';  ?>