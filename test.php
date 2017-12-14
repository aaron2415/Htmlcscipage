
<html>
  <head> lang="en">
    <link rel="sylesheet" type="text/css" href="./style.css">
    <tiltle>CSCI 205 Lesson Video</title>
  </head>
  <body>
    <?php
				include  "/home/smith/conf/conf.php";
				$departments = $dbh->prepare('SELECT * FROM employees LIMIT 20');
				$departments->execute();
				$dept = $departments->fetch();
				print_r($dept);

				echo "<br><br>";

				$dept = $departments->fetchAll();
				print_r($dept);
		?>
    
  </body>
</html>
