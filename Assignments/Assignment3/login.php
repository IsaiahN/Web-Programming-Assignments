<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		session_start();
		$postback = $_POST["postback"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if ((strlen($username) >= 1) && ($password == "guest")) {
				$_SESSION["username"] = $username;
				header("Location: protected.php");
				exit();
		}
	}
?>
<html>
	<head>
		<title>Homework 3 - Question 3 - Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
		<div id="wrapper">
			<h1>Select Model</h1>
			<form action="./login.php" method="POST">
				<table>
					<tr>
						<td><label for="username">Username:<?php if($postback && strlen($username) < 1) { echo "<span class='red'>Please Enter Your Username.</span>";} ?></label></td>
						<td><input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username;?>" min="1" required></td>
					</tr>
					<tr>
						<td><label for="password">Password:<?php if($postback && strlen($password) < 1) { echo "<span class='red'>Please Enter Your Password.</span>";} ?></label></td>
						<td><input type="text" id="password" name="password" placeholder="Password" value="<?php echo $password;?>" min="1" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="postback" value="true"></td>
						<td>
							<button type="submit">Login</button>
							<button type="submit" formnovalidate>Login Without HTML5 Validation</button>
						</td>
					</tr>
				</table>
			</form>
			<a href="./protected.php" title="protected">Check out protected.php</a>
		</div>
	</body>
</html>