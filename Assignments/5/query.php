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
			<div id="photo_area_three">
			</div>
			<div id="list">
			<h2>Search Results <a href="./query.html" title="Back To Search">(Back To Search)</a></h2>
			<table id="inventory">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$supplier_id 	= $_POST["supplier_id"];
					if (!empty($supplier_id)) {
						if ($res = $conn -> query("SELECT * FROM ".$dbname.".Purchases WHERE `Supplier ID` = '".$supplier_id."' ORDER BY `Purchase No` DESC")) {
							$index = 0;
							while ($item = $res -> fetch_assoc()) {
								if ($index == 0) {
								echo "
								<tr>
									<th>Date</th>
									<th>Description</th>
									<th>Price</th>
								</tr>
								";				
								}
								echo "
								<tr>
									<td>".$item['Date']."</td>
									<td>".$item['Description']."</td>
									<td>$".$item['Price']."</td>
								</tr>";
								
								$index++;
							}
						} 
					} else {
							echo "<h2 class='error'>Search Query Was Empty</h2>";
						}
				}
			}
			if ($index == 0) {
							echo "<h2 class='error'>Search For '".$supplier_id."' Was Not Found</h2>";
			}
			?>
			</table>
			</div>
			</div>
	</body>
</html>