<!--
	Name: Mehenur
	Project: Online exam system
	Date: 28/02/18
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exam System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="header">
		<!--Logo div in navbar start-->
		<div class="logoo">
			<a href="index.php" title="Online Quize">
				<img src="images/logo.png" alt="" style="height:35px;width:100px;float: left;">
			</a>
		</div>
		<!--Logo div in navbar end-->

		<!--ul in navbar start-->
		<ul class="nav nav-pills menu pull-right" id="responsive_nav" style="text-align: center;">
			<li><a href="welcome_page.php" style="margin-right: 100px;margin-left: 100px;">Home</a></li>
			<li><a href="index.php" style="margin-right: 100px"> Login</a></li>
			<li><a href="registration.php"style="margin-right: 100px">Registration</a></li>
			<li><a href="signout.php" style="margin-left:100px; ">Log Out</a></li>
		</ul>
		<!--ul in navbar end-->
	</div>
	<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 0,
                nav: false,
                loop: true,
				autoplay:true,
				autoplayTimeout:2000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
          </script>
</body>
</html>