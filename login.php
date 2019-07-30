<?php
	session_start();
	require'C:\xampp\htdocs\BlogIt\dbconfig\config.php';

?>

<!DOCTYPE html>
<head>
  <title>BlogIt. Login</title>
  <link href="login.css" type="text/css" rel="stylesheet"/>
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
              <li class="nav-item active">
                <a class="nav-link" href="index.html">HOME</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="register.php">REGISTER</a>
              </li>
              
            </ul>
          </div>
        </nav>
    </section>
    
    <!--Contact Us-->
    <section id="contact">
        <div class="container">
        <form action="login.php" method="post" >
            <h1>Login </h1>
            
            <div class="row">
            <div class="col-md-6">
            <form class="contact-form">
           
            <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
            </form>
            </div>
            
            <div class="col-md-6 text-center">
            <img src="images/add.jpg">
            </div>
            
         </form>   
        </div>
    </section> 
    
    <?php
		if(isset($_POST[submit]))
		{
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$query = "select * from user where email='$email' and password='$password' ";
			//echo $query;
			$query_run = mysqli_query($con,$query);
			//echo mysql_num_rows($query_run);
			
			if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					
					header( "Location:create.html");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
			else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
		else
			{
			}
		
	?>
    
    
    <!--Footer-->
    <section id="footer">
        <div class="container text-center">
            <p> Copyright © Earthly. | All Rights Reserved</p>
            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
        </div>
            
    </section>
 </body>   