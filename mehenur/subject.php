	<div class="container">
		<?php include("top.php"); ?>
		<div class="welcome_page" style="height: 500px;">
			<h2>Which subject You want to test</h2>
			<?php include("database.php"); ?>
			<?php
				$query=mysql_query("select * from mst_subject");
				while($row=mysql_fetch_row($query))
				{
					echo "<tr><td><button style = 'margin-left:30%;'><a href=showtest.php?subid=$row[0] style = 'color:#434343;'><font size=4>$row[1]</font></a></button>"."<br/>"."<br/>";
				}
				echo "</table>";
			?>
		</div>
                
		<?php include("footer.php");?>
	</div>
