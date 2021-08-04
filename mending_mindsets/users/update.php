<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEING HAPPY-BY ISHA ROSHAN</title>
    <link rel="stylesheet" href="style.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  #jumbo{
    margin-bottom:0;  
	 background-size: cover;
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%),   url("img/bg3.jpeg");
	 background-repeat: no-repeat;
	 width: 100%;
  }
  </style>
  </head>
  <body>
 
  <!-- navbar -->

<nav class="navbar navbar-expand-sm navbar-light bg-light">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand"><img src="img/30.png"></a>

<!-- Links -->
<div class="collapse navbar-collapse justify-content-end" id="nav-content">     
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="health.html">Mental Health</a>
</li>
<li class="nav-item">
<a class="nav-link" href="blog.html">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="care.html">Preventive Care</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.html">Conatct Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="quiz.html">Quiz</a>
</li>
<li>
<a class="nav-link" href="dashboard.php">Dashboard</a>
</li>
</ul>
</nav>
<?php
include "db_connect.php";
 if(ISSET($_POST['update'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $issues=$_POST['issues'];
    $age=$_POST['age'];
    $password=$_POST['password'];
    $conf_password=$_POST['conf_password'];
    $query = "UPDATE table1 SET Username = '$username', Issues = '$issues', Age='$age' , Password ='".md5($password)."' WHERE Email = '$email'";
    $exec_query=mysqli_query($conn,$query)  or die ("err $username " . mysqli_error ($conn));
   
  }
  if($exec_query==true)
            {
                echo '<script type="text/javascript">

                window.onload = function () { alert("Profile Updated Successfully!!!"); }
    
    </script>' ; 
              
            }
            else
            {
                echo '<script type="text/javascript">

                window.onload = function () { alert("Error occurred Try Again!!!"); }
    
    </script>' ; 
                
            }
?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>