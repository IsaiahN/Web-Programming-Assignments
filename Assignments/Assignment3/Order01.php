<html>
	<head>
		<title>Homework 3 - Question 2 | Order01</title>
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
	<?php
		unset($_COOKIE['fname']);
		unset($_COOKIE['color']);
		unset($_COOKIE['model']);

		setcookie("fname", "", 1);
		setcookie("color", "", 1);
		setcookie("model", "", 1);
	?>
		<div id="wrapper">
			<h1>Select Model</h1>
			<form action="./Order02.php" method="GET">
				<table>
					<tr>
						<td><label for="fname">First Name:</label></td>
						<td><input type="text" id="fname" name="fname" placeholder="First Name"  min="2" max="20" required></td>
					</tr>
					<tr>
						<td><label for="bday" required>Car Model:</label></td>
						<td>
							<input type="radio" id="model" name="model" value="subaru">Subaru<br/>
							<input type="radio" id="model" name="model" value="corvette">Corvette<br/>
							<input type="radio" id="model" name="model" value="mustang">Mustang
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit">>> Next >></button></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" formnovalidate>Submit without validation</button></td>
					</tr>
				</table>
			</form>
			<a href="./Order01.php" class="reload" title="Reload Page">Reload Page</a>
		</div>
	</body>
</html>