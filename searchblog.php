<?php
	session_start();
	require'C:\xampp\htdocs\BlogIt\dbconfig\config.php';

?>

<!DOCTYPE html>
<head>
  <title>BlogIt.</title>
  <link href="searchblog.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
  
 
 <body>
    <!--Navigation -->
    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
          THINK IT ? BLOG IT
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item">
                <a class="nav-link" href="create.html">PROFILE</a>
              </li>
     
            </ul>
          </div>
        </nav>
    </section>
    
    
    <!--Contact Us-->
    <section id="contact">
        <div class="container">
        <form action="searchblog.php" method="post" >
            <h3>Your Blogs </h3>
            
            <div class="row">
            <div class="col-md-8">
            <form class="contact-form">
           
            <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>

            </form>
            </div>
            
            <div class="col-md-2 text-center">
                <button type="submit" class="btn btn-primary" name="submitb" >Submit</button>
            </div>
            
         </form>   
        </div>
    </section> 
    
    
    <section id="searchb">
        <div class="container">
        <div class="row">
            <div class="col-md-8">
        
            <?php
                    
                    if(isset($_POST['submitb']))
                    {
                        //echo '<script type="text/javascript"> alert("Sign up button clicked") </script
                    
                        @$email=$_POST['email'];
                        
                        $sql = "SELECT * FROM blogs WHERE email='$email';";
                        $result = mysqli_query($con,$sql);
                        $resultcheck = mysqli_num_rows($result);
            
                        if($resultcheck > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo $row['title']. "<br>";
                                echo $row['content']. "<br><br>";
                            }

                        }
                    }    
            ?>
            
            </div>
        </div>
        </div>
    </section>