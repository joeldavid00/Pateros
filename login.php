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
<body>
	<form action="login.php" method="post">
	 
	  <div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" required>

		<button type="submit" name="submit">Login</button>
		
	  </div>

	  
	</form>
</body>
</html>


