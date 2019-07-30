<?php
	session_start();
	require'C:\xampp\htdocs\BlogIt\dbconfig\config.php';

?>

<!DOCTYPE html>
<head>
  <title>BlogIt. Register</title>
  <link href="register.css" type="text/css" rel="stylesheet"/>
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
                <a class="nav-link" href="login.php">LOGIN</a>
              </li>
              
            </ul>
          </div>
        </nav>
    </section>
    
    <!--Contact Us-->
    <section id="contact">
        <div class="container">
        <form action="register.php" method="post">
            <h1>Register </h1>
            
            <div class="row">
            <div class="col-md-6">
            <form class="contact-form">
            <div class="form-group">
            <input type="fullname" class="form-control" placeholder="Name" name="fullname" required>
            </div>
            <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>

            <button type="submit" name="submitb" class="btn btn-primary">Submit</button>
            </form>
            </div>
            
            <div class="col-md-6 text-center">
            <img src="images/add.jpg">
            </div>
            
        </form>    
        </div>
    </section>
    
    <?php
			
			if(isset($_POST['submitb']))
			{
				//echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
		
				
                
                @$password=$_POST['password'];
	
				@$fullname=$_POST['fullname'];
			
				@$email=$_POST['email'];
				
		
				{
					$query = "select * from user where email='$email'";
					//echo $query;
					$query_run = mysqli_query($con,$query);
					//echo mysql_num_rows($query_run);
					if($query_run)
						{
							if(mysqli_num_rows($query_run)>0)
							{
								// there is already a user with the same username
								echo '<script type="text/javascript"> alert("Email already exists.. ") </script>';
							}
	
							else
							{
								$query = "insert into user values('$fullname','$email','$password')";
								$query_run = mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>
									<a href="index.php"> GO TO HOMEPAGE </a>';
								
								}
								else
								{
									echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
								}
							}
						}
						else
						{
							echo '<script type="text/javascript">alert("DB error")</script>';
						}
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