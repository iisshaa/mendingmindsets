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
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%),   url("img/home.jpg");
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
<a class="navbar-brand"><img src="img/logo.png"></a>

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
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.html";
    header("Location: $url");
}

?>
<center>
<div class="container">
<div class="col-sm-7" style=" margin-top:15px;margin-bottom:45px;">

<div class="phppot-container">
		<div class="page-header">
        <div class="page-content"><h1 style="color:teal"><i>Welcome <?php echo $username;echo"!!!!"?></i></h1></div><br><br>
       <div class="card text-dark bg-light mb-3">
			<div class="card-header text-center"><b>PROFILE DETAILS</b></div>
            <div class="card-body">
  <?php
 include "db_connect.php";
$username = $_SESSION['username'];
$query="SELECT * FROM table1 WHERE Username='$username'";
$exec_query=mysqli_query($conn,$query)  or die ("err $username " . mysqli_error ($conn));
$s=mysqli_num_rows($exec_query);
if ($s != 0) {
    while ($row = mysqli_fetch_assoc($exec_query)) {
       echo"Username:"; echo $username=$row['Username']."<br>";
       echo"Email:"; echo $email = $row['Email']."<br>"; 
       echo"Issues:"; echo $issues = $row['Issues']."<br>"; 
       echo"Age:"; echo $age = $row['Age']."<br>";  // repeat for all db columns you want
    }
}

?>
<br>
<button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#formid">Edit Profile</button>
<div class="modal" id="formid" style="z-index:20000">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-body">
                    <h1>Edit Your Profile</h1>
					<form method='POST' action="update.php">
                    <label  class="form-label">Username</label><br>
<input type='text' name='username'  class="form-control form-control-lg" /><br><br>
<label  class="form-label">Email</label><br>
<input type='email' name='email'  class="form-control form-control-lg" /><br><br>
<label  class="form-label">Mental Issues Faced</label><br>
<textarea name='issues' class="form-control form-control-lg" ></textarea><br><br>
<label  class="form-label">Age</label><br>
<input type='number' name='age'  class="form-control form-control-lg" /><br><br>
<label  class="form-label">Password</label><br>
<input type='password' name='password'  class="form-control form-control-lg" /><br><br>
<label  class="form-label">Confirm Password</label><br>
<input type='password' name='conf_password'  class="form-control form-control-lg" /><br><br>
<button class="btn btn-primary btn-md" type=button data-dismiss="modal">Close</button>
<button name='update' class="btn btn-primary btn-md" type="submit">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
    <span class="login-signup"><a href="logout.php">Logout</a></span><br>
  
</div>
	</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</center>

  </body>
</html>