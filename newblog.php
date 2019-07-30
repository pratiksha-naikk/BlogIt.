<?php
	session_start();
	require'C:\xampp\htdocs\BlogIt\dbconfig\config.php';

?>

<!DOCTYPE html>
<head>
  <title>BlogIt.</title>
  <link href="newblog.css" type="text/css" rel="stylesheet"/>
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
                <a class="nav-link" href="index.php">HOME</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="create.html">PROFILE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">LOG OUT</a>
              </li>
     
            </ul>
          </div>
        </nav>
    </section>
    
    
    <!--Create New Blog-->
    <section id="newblog">
        <div class="container">
        
            
            <div class="row">
            <div class="col-md-12">
            <form class="newblog-form" action="newblog.php" method="post" >
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
            <input type="title" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="form-group">
            <textarea class="form-control" name="content" rows="20" placeholder="Content" required>
            </textarea>
            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            </div>
            
        
        </div>
    </section>
    
    
    <?php
			
			if(isset($_POST['submit']))
			{
				//echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
		
				
                
                @$email=$_POST['email'];
	
				@$title=$_POST['title'];
			
				@$content=$_POST['content'];
				
		
				{
					$query = "select * from blogs where title='$title'";
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
								$query = "insert into blogs values('$email','$title','$content')";
								$query_run = mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript">alert("New Blog Created")</script>
									<a href="index.html"> GO TO HOMEPAGE </a>';
								
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
    
    