<html>
	<head>
		<title>Homework 3 - Question 2 | Order02</title>
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
		<div id="wrapper">
			<h1>Select Color</h1>
			
			<form action="./Order03.php" method="GET">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "GET" || (isset($_COOKIE['model']) && isset($_COOKIE['fname']))) {
					if (!isset($_GET['fname']) || !isset($_GET['model']) || strlen($_GET['fname']) < 2 || strlen($_GET['model']) < 2 || strlen($_GET['fname']) > 20 || strlen($_GET['model']) > 20) { 
			?>
							<div id="info_box" class="errors">
								<span>There were errors with your submission</span>
							</div> 
			<?php
						exit();
					} else {
					
					setcookie("model", $_GET['model'], time() + 3600);
					setcookie("fname", $_GET['fname'], time() + 3600);

			?>
				<table>
					<tr>
						<td><label for="bday">Car Color:</label></td>
						<td>
							<select id="colors" name="color" required>
							  <option value="">Select Option</option>
							  <option value="red">Red</option>
							  <option value="yellow">Yellow</option>
							  <option value="blue">Blue</option>
							</select>
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
				<?php } 
				} else { 
				
				?>
							<div id="info_box" class="errors">
								<span>There were errors with your submission</span>
							</div> 
				<?php
						exit();
				}
				?>
			</form>
			<a href="./Order02.php" class="reload" title="Reload Page">Reload Page</a>
		</div>
	</body>
</html>