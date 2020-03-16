<html>
	<head>
		<title>Homework 3 - Question 1</title>
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
		<div id="wrapper">
			<h1>Form Validation</h1>
			<p>HTML5 and server-side validation</p>

			<form action="validateConfirm.php" method="POST">

			<?php if (isset($_GET['valid'])) { ?>	
				<div id="info_box" class="<?php if ($_GET['valid'] == "true") { echo "thanks"; } else { echo "errors";}?>">
				<span>
				<?php 
					if ($_GET['valid'] == "true") {
						echo "We have successfully received your submission"; 
					} else { 
						echo "There were errors with your submission";
					}
				?>
				</span>
				<?php 
				if (isset($_GET["errors"])) {
					$error = explode("|", $_GET["errors"]);
					echo "<ul>";
					for ($i =0; $i < count($error); $i++) {
						echo "<li>".$error[$i]."</li>";
					}
					
					echo "</ul>";
				} 
				?>
				</div> 
			<?php } ?>

				<table>
					<tr>
						<td><label for="email">Email:</label></td>
						<td><input type="text" id="email" name="email" placeholder="Email" required></td>
					</tr>
					<tr>
						<td><label for="fname">First Name:</label></td>
						<td><input type="text" id="fname" name="fname" placeholder="First Name" required></td>
					</tr>
					<tr>
						<td><label for="bday">Birthday:</label></td>
						<td><input type="date" id="bday" name="bday" required></td>
					</tr>
					<tr>
						<td><label for="age">Age:</label></td>
						<td><input type="number" id="age" name="age" placeholder="Age"  min="0" max="120" required></td>
					</tr>
					<tr>
						<td><label for="state">State:</label></td>
						<td><input type="text" id="state" name="state" maxlength="2" size="2" placeholder="ST" required></td>
					</tr>
					<tr>
						<td><label for="zip">Zip:</label></td>
						<td><input type="number" id="zip" name="zip" placeholder="Zip" minlength="5" maxlength="5" required></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit">Submit Form</button></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" formnovalidate>Submit without HTML5 validation</button></td>
					</tr>
				</table>
			</form>
			<a href="./validate.php" class="reload" title="Reload Page">Reload Page</a>
		</div>
	</body>
</html>