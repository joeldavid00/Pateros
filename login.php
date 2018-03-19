<?php


// call the login() function if login_btn is clicked
if (isset($_POST['submit'])) {
	login();
}


function login(){
 $host = "localhost";
 $username = "root";
 $password = ""; 
 $db_name = "pateros_db";


$con = mysqli_connect($host,$username,$password,$db_name) or die("Couldn't connect");
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$query = "select * from users where username='$username' and password='$password'";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result) != 0){
	header("location:/pateros/");
}else{
	echo "Invalid username or password";
}
}

?>
<!Doctype html>
<html>

 <head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pateros Technological College</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

	<style>
	.login-page{ margin: 20px 0;}
	.card{padding: 20px ;border:1px solid #eee;margin-top: 40px}
	.btn{margin: 20px 0;}
	.margin-top{margin-top: 20px 0;}
	</style>
  </head>

<body>

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container" >
        <a class="navbar-brand" href="#">Pateros Technological College</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#Academics">Academics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Admission">Admission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('Image/1.jpg');" >
      <img class="img-fluid d-block mx-auto" src="Image/logo.jpg"  alt="">
    </header>

	
		<div class="col-md-12 text-center margin-top">
			<h1>LOGIN</h1>
		</div>
		<form action="login.php" method="post">
	 
	  <div class="container">
		<div class="card">
			<div class="row">
			<div class="col-md-12">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" class="form-control" name="username" required>
			</div>
			<div class="col-md-12">
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" class="form-control" name="password" required>
			</div>
		</div>


		<button type="submit" name="submit" class="btn btn-primary">Login</button>
		</div>
		
	  </div>

	  
	</form>
		
	
</body>
</html>


