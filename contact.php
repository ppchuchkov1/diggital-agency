<?php include './includes/header.php'; ?>
<div class="contact">
<?php include './includes/navigation.php'; ?>

  
<div class="container text-center" style="padding-top: 60px;">
<h1 class="mb-2 form-heading">Contact Us</h1>
<form>
  <div class="form-group">
    <?php 
    if(isset($_SESSION['user_email'])){
      $sessionEmail= $_SESSION['user_email'];

      echo "<input type='email' class='form-controls' value='$sessionEmail' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'> ";
    }else{
      echo ' <input type="email" class="form-controls" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">';
    }
    ?>
    </div>
  <div class="form-group">
    <input type="text" class="form-controls"  placeholder="Subject">
  </div>
  <div class="form-group">
    
    <textarea class="form-controls" placeholder="Textarea" style="height: 200px;" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="form-button">Submit</button>
</form>
</div>
</div>

<!-- Footer -->
<?php include './includes/footer.php';  ?>
