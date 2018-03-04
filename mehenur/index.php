<?php
session_start();
if(isset($_POST['login'])) {
  $ip ='localhost';
  $username = 'root';
  $passwd = '';
  $dbname = 'mehenur';
  $visibility = 1;
  $connection = mysqli_connect($ip, $username, $passwd, $dbname);
  $myusername = mysqli_real_escape_string($connection,$_POST['username']);
  $mypassword = mysqli_real_escape_string($connection,$_POST['password']);
  $sql = "SELECT `id` FROM registration WHERE `user_name`= '{$myusername}' and `password` = '{$mypassword}' AND `visible` = '{$visibility}'";
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //$active = $row['active'];
  $count = mysqli_num_rows($result);
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
    $_SESSION['login_user'] = $myusername;
    //echo "<script>alert('hacked');</script>";
    header("location:welcome_page.php");
  }else {
    echo "<script>alert('Your Login Name or Password is invalid');</script>";
  }
}
?>


<div class="container">
	<?php include('top.php'); ?>
	<div class="login_registration">
		<div class="registration_side">
			<div class="name">Login</div>
			<div class="Login_form">
				<form action="#" method="POST">
					<table>
						<tr><td><label for="user"> Your username</label></td></tr>
						<tr><td><input type="text" name="username" id="user" required=""></td></tr>
						<tr><td><br></td></tr>
						<tr><td><label for="passwd">Your password</label></td></tr>
						<tr><td><input type="password" name="password" id="passwd" required=""></td></tr>
						<tr>
							<td><label class="checkbox"><input type="checkbox" name="RememberMe" id="rememberme" value="true">Remember Me</label></td>
						</tr>
						<tr><td><input type="submit" value="Login" name="login" id="login"></td></tr>
					</table>
				</form>
        <h4>Not registered yet ? <a href="registration.php" style="color: red;">click here</a></h4>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</div>