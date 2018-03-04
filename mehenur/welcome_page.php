<?php 
session_start();
if (!isset($_SESSION['login_user'])) {
	header('location:index.php');
}

 ?>

<div class="container">
	<?php include("top.php"); ?>
	<div class="welcome_page">
		<h2>Welcome To Online Exam System</marquee></h2>
	</div>
	<div class="welcome">
		<p style="color:#00A252; margin-left: 32%; font-size: 20px;">
			This site is made for those guyes,<br/>
			Who want to test theirself in some language <br/>
			like PHP(Hyper text preprocessor),SQL(Standard query language), <br/>
			HTML(Hypertext markup language),CSS(Casecading style sheet),<br/>
			and some others. <br/>
			<br/>
			This is the first version of Online Examination System <br/>
			Soon you will get its upgrade version <br/>
			So keep in touch for upgrade version <br/>
			<br/>
			Hope you will enjoy this site.

		</p>
	</div>
	<div class="welcome_page">
		<a href="subject.php" style="margin-left: 32%;"><button id="login">Next Page</button></a>
	</div>
	<?php include("footer.php") ?>
</div>