
<?php

if (isset($_POST['registration'])) {
  $user = 'root';
  $passwd = '';
  $ip = 'localhost';
  $dbname = 'mehenur';
  $full_name = $_POST['full_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $connection_write = mysqli_connect($ip, $user, $passwd, $dbname);
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "INSERT INTO registration (`full_name`, `user_name`, `email`,  `mobile`, `password`,`visible`)
             VALUES('{$full_name}', '{$username}', '{$email}', '{$mobile}', '{$password}', '{$visibility}')";
    if(mysqli_query($connection_write, $query)){
      echo "<script>alert('Your are successfully registerd');</script>";
      header("location:index.php");
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection_write);
}

 ?>





<div class="container">

<?php include 'top.php' ;?>
	<div class="login_registration">
		<div class="registration_side">
			<div class="name">Registration</div>
			<div class="Registration_field">
				<form action="#" method="POST">
					<table>
						<tr><td><label for="Full Name">Full Name</label></td></tr>
						<tr><td><input type="text" name="full_name" id="Full Name" required="" size="50" value=""></td></tr>
						<tr><td><br></td></tr>
						<tr><td><label for="users">Username</label></td></tr>
						<tr><td><input type="text" name="username" id="users" required="" size="50" value=""></td></tr>
						<tr><td><br></td></tr>
						<tr><td><label for="Email">Email</label></td></tr>
						<tr><td><input type="text" name="email" id="Email" required="" size="50" value=""></td></tr>
						<tr><td><br></td></tr>
						<tr><td><label for="Mobile">Mobile</label></td></tr>
						<tr><td><input type="text" name="mobile" id="Mobile" required="" size="50" value=""></td></tr>
						<tr><td><br></td></tr>
						<tr><td><label for="password">Password</label></td></tr>
						<tr><td><input type="password" name="password" id="password" required="" size="50" value=""></td></tr>
						<tr><td><label class="checkbox"><input type="checkbox" name="RememberMe" id="rememberme" value="true">Remember Me</label></td></tr>
						<tr><td><input type="submit" name="registration" value="Register" class="btn btn-success" id="login"></td></tr>
					</table>
				</form>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>

</div>