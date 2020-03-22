<?php
if ((($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['abandon'])))) {
	session_unset();
	session_destroy();
	$_SESSION = array();
} else {
	session_start();
}
?>
<html>
	<head>
		<title>Homework 3 - Question 3</title>
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
		<div id="wrapper">
		<?php
			if (!isset($_SESSION['username'])) {
				header("Location: login.php");
				exit();
			} else {
				echo "<h1>Welcome ".$_SESSION['username']."</h1><p>This is the super secret protected page.</p>";
			}
		?>
		
		<form action="./protected.php" method="POST"> 
		<img src="img/classified.jpg" alt="Classified" height="300" width="auto"/>
			
		<input type="hidden"  name="abandon" value="true">
		<button type="submit">Logout</button>
		</form>
		</div>
	</body>
</html>