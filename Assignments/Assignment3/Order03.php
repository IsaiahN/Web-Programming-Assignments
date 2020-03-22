<html>
	<head>
		<title>Homework 3 - Question 2 | Order03</title>
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
		<div id="wrapper">
					
			<h1><?php echo $_COOKIE['fname'];?>'s Car</h1>
			<?php 
				setcookie("color", $_GET['color'], time() + 3600);
				if (isset($_COOKIE['model']) && isset($_GET['color'])) { ?>
					
					<p>You Selected A <?php echo $_GET['color'];?>  <?php echo $_COOKIE['model'];?></p>
					<img src="img/<?php echo $_COOKIE['model'];?>_<?php echo $_GET['color'];?>.jpg" alt="<?php echo $_GET['color'];?>  <?php echo $_COOKIE['model'];?>" height="300" width="auto"/>
			<?php
				}
			?>
			<a href="./Order03.php?<?php echo $_SERVER['QUERY_STRING'];?>" class="Reload" title="Reload">Reload Page</a> 
			<a href="./Order01.php" class="Back To Home" title="Back To Home">Back To Selection Page</a>
		</div>
	</body>
</html>