<html>
	<head>
		<title>Nike | Recent Orders</title>
		<link rel="stylesheet" type="text/css" href="style.css"/> 
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Sans:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico"/>
	</head>
	<body>

		<header><h1>Nike | <span>Recent Orders</span></h1>
			<ul id="right_nav">
				<li><a href="display.php" title="Order Catalog">Order Catalog</a></li>
				<li><a href="query.html" title="Search Products">Search Products</a></li>
				<li><a href="newpurchase.html" title="Add New Products">Add New Products</a></li>
			</ul>
		</header>
			<?php
			$servername = "localhost";
			$username 	= "inwukor1";
			$password 	= "inwukor1";
			$dbname 	= "inwukor1";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn) {
			?>
			<div id="wrapper">
			<div id="photo_area">
			</div>
			<div id="list">
			<h2>Orders Table <a href="./newpurchase.html" title="Add New Purchase">(Add New Purchase)</a></h2>
			<table id="inventory">
			<tr>
				<th>Purchase No</th>
				<th>Supplier ID</th>
				<th>Date</th>
				<th>Quantity</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
			<?php
			if ($res = $conn -> query("SELECT * FROM ".$dbname.".Purchases ORDER BY `Purchase No` DESC")) {
			while ($item = $res -> fetch_assoc()) {
				echo "
				<tr>
					<td><strong>".$item['Purchase No']."</strong></td>
					<td>".$item['Supplier ID']."</td>
					<td>".$item['Date']."</td>
					<td>".$item['Quantity']."</td>
					<td>".$item['Description']."</td>
					<td>$".$item['Price']."</td>
				</tr>";
			}
			}
			}
			?>
			</table>
			</div>
			</div>
	</body>
</html>