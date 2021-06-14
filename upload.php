<?php include './includes/header.php'; ?>
<div class="add-post">
<?php include './includes/navigation.php'; ?>

  
<div class="container text-center pt-5">
<h1 class="mb-2 form-heading">Write Post</h1>

<?php


if(!isset( $_SESSION['user_id'])){
  header("location: index.php");
  exit;
}

if (isset($_POST['upload'])) {
      

      $tags = trim($_POST['blog_tag']);
      $content = trim($_POST['blog_content']);
      $tags= mysqli_real_escape_string($conn,$tags);
      $content= mysqli_real_escape_string($conn,$content);
      $blogImg = $_FILES['blog_image']['name'];
      $blogImgTmp = $_FILES['blog_image']['tmp_name'];
      $author = $_SESSION['user_name'];
      $postDate = date("Y-m-d H:i:s");
      $folder = './blog-images/';
      move_uploaded_file($blogImgTmp, $folder.$blogImg);
      $uploadPost = "INSERT INTO blog (blog_content,blog_tags,blog_img,blog_author,blog_date_publish)
  VALUES (' $content','$tags','$blogImg', '$author' ,'$postDate')";
      $queryAddPost = mysqli_query($conn, $uploadPost);
      if ($uploadPost) {
          echo '<p class="text-white">Successful</p>';
      } else {
          die('Query failed: ' . mysqli_error($conn));
      }
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="blog_tag" class="form-controls" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
    </div>
 
  <div class="form-group">
    
    <textarea class="form-controls" type="text" name="blog_content" placeholder="Textarea" style="height: 200px;" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
  <input type="file" class="form-controls" name="blog_image" />
  </div>
  <button type="submit" name="upload" class="form-button">Submit</button>
</form>
</div>
</div>

<!-- Footer -->
<?php include './includes/footer.php';  ?>
