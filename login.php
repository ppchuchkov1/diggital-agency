<?php include './includes/header.php'; ?>
<?php
if (isset($_POST['login'])){
    $loginUsername = trim($_POST['username']);
    $loginPassword = trim($_POST['password']);
    $loginUsername = mysqli_real_escape_string($conn,$loginUsername);
    $loginPassword = mysqli_real_escape_string($conn,$loginPassword);
    $loginPassword = md5($loginPassword);

    $sqlChekLogin = "SELECT * FROM users WHERE user_name = '$loginUsername' AND user_password = '$loginPassword'";
    $queryCheckLogin = mysqli_query($conn, $sqlChekLogin);
    if (!$queryCheckLogin) {
        die('QUERY FAILED: ' . mysqli_error($conn));
    }
while ($row = mysqli_fetch_assoc($queryCheckLogin)) {
    $userId = $row['user_id'];
    $userName = $row['user_name'];
    $userPassword = $row['user_password'];
    $userRole = $row['user_role'];
    $userEmail= $row['user_email'];
    

    if (($loginUsername == $userName) && ($loginPassword == $userPassword) && ($userRole == 'admin')) {
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $userName;
        $_SESSION['user_password'] = $userPassword;
        $_SESSION['user_role'] = $userRole;
        $_SESSION['user_email'] = $userEmail;

    } elseif (($loginUsername == $userName) && ($loginPassword == $userPassword) && ($userRole == 'writer')) {
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $userName;
        $_SESSION['user_password'] = $userPassword;
        $_SESSION['user_role'] = $userRole;
        $_SESSION['user_email'] = $userEmail;

   
    } 
}
}


if(isset ($_SESSION["user_name"]) && $_SESSION["user_password"] &&  $_SESSION['user_email'] &&  $_SESSION['user_role'] =='admin'){
    header("location: upload.php");
    exit;
}
if(isset ($_SESSION["user_name"]) && $_SESSION["user_password"] &&  $_SESSION['user_email'] &&  $_SESSION['user_role'] =='writer'){
    header("location: upload.php");
    exit;
}
?>

<div class="login">
<?php include './includes/navigation.php'; ?>

  
<div class="container text-center" style="padding-top: 120px;">
<h1 class="mb-3 form-heading">Login</h1>
<form action="login.php" method="post">
  <div class="form-group">
    <input type="text" class="form-controls" name="username"  placeholder="Username">
    </div>
  <div class="form-group">
    <input type="password" name="password" class="form-controls"  placeholder="Password">
  </div>
  <div class="form-check mt-3 mb-3">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label text-white" for="flexCheckDefault">
   Save Account
   </label>
</div>
  <button type="submit" class="form-button" name="login">Submit</button>
</form>
</div>
</div>




<!-- Footer -->
<?php include './includes/footer.php';  ?>



