<div id="header"> <!-- Start Header -->
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-light text-uppercase shadow" style="background-color: white;">
        <a href="#" class="navbar-brand"><img src="./images/logo-bixon.png" class="logo" alt=""></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="nav navbar-nav ml-auto">
            <a href='http://localhost/diggital-agency/' class='nav-item nav-link'>Home</a>
           
           <?php 

            if(isset($_SESSION['user_name'])){
                $seesionUsername = $_SESSION['user_name'];
                echo " <a href='upload' class='nav-item nav-link'>Upload Post</sub></a>";
            echo " <div class='dropdown'>
            <a  type='button' class='nav-item nav-link text-capitalize' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                ".$seesionUsername."
            </a>
            <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                <a class='dropdown-item' href='logout'>Logout</a>
            </div>
            </div>";
            }else{
                echo "  <a href='login' class='nav-item nav-link'>Login</a>
                        <a href='register' class='nav-item nav-link'>Register</a>";
            }
            ?>


            <?php 
            $currentUrl = $_SERVER['PHP_SELF'];
            $indexUrl = '/diggital-agency/index.php';

            if($currentUrl != $indexUrl){
                echo' <a href="#" class="nav-item nav-link disabled">Pricing</a>     
                <a href="#" class="nav-item nav-link disabled">Blog</a> ';
            }else{
             echo  '
             <a href="#pricing" class="nav-item nav-link">Pricing</a>     
             <a href="#blog" class="nav-item nav-link">Blog</a>';
             
            }
            
            ?>
         
            </div>
        </div>
    </nav>
    </div>
    </div> <!-- End Header -->