<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$purchase_no 	= $_POST["purchase_no"];
		$supplier_id 	= $_POST["supplier_id"];
		$date 			= $_POST["date"];
		$qty 			= $_POST["qty"];
		$description 	= $_POST["description"];
		$price 			= $_POST["price"];
		
		
		$servername = "localhost";
		$username 	= "inwukor1";
		$password 	= "inwukor1";
		$dbname 	= "inwukor1";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn) {

		$query = "INSERT INTO ".$dbname.".Purchases (`Purchase No`, `Supplier ID`, `Date`, `Quantity`, `Description`, `Price`)
		VALUES ('".$purchase_no."', '".$supplier_id."', '".$date."', '".$qty."', '".$description."', '".$price."' )";

		if ($conn->query($query)) {
						header("Location: display.php");
						exit();
		} else {
			echo $conn->error;
		}

		$conn->close();
				
		}
	}
?>