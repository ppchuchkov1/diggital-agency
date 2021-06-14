<?php include './includes/header.php'; ?>
    <!-- Start Header -->
    <?php include './includes/navigation.php'; ?>
     <!-- End Header -->

    
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                            <!-- Post meta content-->
                            <?php 
                            
                            if (isset($_GET['p_id'])){
                                $getId = $_GET['p_id'];
                                $sqlViewSinglePost = "SELECT * FROM blog WHERE blog_id ='$getId'";
                                $queryViewSinglePost  = mysqli_query($conn,$sqlViewSinglePost);
                            
                                while ($row = mysqli_fetch_assoc($queryViewSinglePost)){
                                    $sql_id = $row['blog_id'];
                                    $sql_tags =  $row['blog_tags'] ;
                                    $sql_content =  $row['blog_content'] ;
                                    $sql_img =  $row['blog_img'] ;
                                    $sql_publish = $row['blog_date_publish'];
                                    $sql_author= $row['blog_author'];
                            ?>
                                       <p class="text-muted"><?php echo $sql_publish; ?> <?php echo $sql_author; ?> </p> 
                            
                          
                          
   
                            <!-- Post categories-->
                           
                            <a class="badge p-2" href="#!"><?php echo $sql_tags ?></a>
                            
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="./blog-images/<?php echo $sql_img?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <h3 class="fs-5 mb-4"><?php echo $sql_content ?></h3>
                            </section>
                    </article>                    
                </div>
            <?php }}?>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    
                    <!-- Categories widget-->
                    <div class="card mb-4">
                       <div class="card-header">Side Widget</div>
                       <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
       <!-- Footer -->
<?php include './includes/footer.php';  ?>