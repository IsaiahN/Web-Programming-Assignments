<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Isaiah Nwukor - Web Developer In Training</title>
	<style>
		.ate{color:red}
		.checkerboard{width:300px;border:1px solid gray}
		.checkerboard td{height:35px;width:35px;border:1px solid #ffd700}
		.checkerboard td.black{background:#000}
		.checkerboard td.red{background:red}
		div#wrapper{width:70%;margin:0 auto}
		div#wrapper hr{margin-top:30px}
		.food{border:1px solid #e4dede96;padding:5px;background:#f9f9f9}
		.food td{border:1px solid #6b6a6a78;padding:10px;text-transform:capitalize;background:#e9ecec}
		.food td:nth-child(2n){font-weight:700}
		.food th{text-transform:uppercase}
		form{margin:20px 0;background:#ccc;padding:10px;font-weight:700}
	</style>
</head>
	<body>	
<div id="wrapper">
		<?php
			function isBitten() {
				return ((rand(0,1) == 1) ? true : false);
			}
			echo "<h2>Question 1: Did Charlie Eat My Lunch?</h2>";
			if (isBitten() == true) {
				echo "<h3 class=\"ate\">Charlie ate my lunch!</h3>";
			} else {
				echo "<h3>Charlie did not eat my lunch!</h3>";
			}
		?>

		<hr/>

		<?php
			echo "<h2>Question 2: Checker board</h2>
			<table class=\"checkerboard\" cellpadding=\"1\" cellspacing=\"1\">
			";
				$size = 8;
			if (isset($_REQUEST['checkerboard_size'])) {
				$size = $_REQUEST['checkerboard_size'];
			}
			for($i = 0; $i < $size; $i++) {
				echo "<tr>";
				for($j = 0; $j < $size; $j++) {
					if ($i % 2 == 0) {
						echo "<td class=\"".(($j % 2 == 0) ? "red" : "black" )."\"></td>";
					} else {
						echo "<td class=\"".(($j % 2 == 1) ? "red" : "black" )."\"></td>";
					}
				}
				echo "</tr>";
			}
			echo "</table><br/>";
		?>
		<form action="http://codd.cs.gsu.edu/~inwukor1/Assignment2/hw2.php" method="GET">
		  <label for="checkerboard">Checker Board Size:</label>
		  <input type="number" id="checkerboard" name="checkerboard_size" value="<?php echo $_REQUEST['checkerboard_size']; ?>" placeholder="Enter Check Board Size" min="1"/>
		  
		  <input type="submit" value="Update Board"/>
		</form> 
		<hr/>
		<?php
			echo "<h2>Question 3: Months</h2>
			<h4>Standard Months</h4>";
			$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');

			for($i = 0; $i < count($month); $i++) {
				echo $month[$i]."<br/>";
			}
			sort($month);
			
			echo "<h4>Sorted Months</h4>";
			for($i = 0; $i < count($month); $i++) {
				echo $month[$i]."<br/>";
			}	
			
			echo "<h2>Question 3: Months (Using Foreach)</h2>";
			
			echo "<h4>Standard Months (Using Foreach)</h4>";
			$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');

			foreach($month as $m) {
				echo $m."<br/>";
			}
			sort($month);
			
			echo "<h4>Sorted Months (Using Foreach)</h4>";
			foreach($month as $m) {
				echo $m."<br/>";
			}
		?>
		<hr/>
		<?php
			echo "<h2>Question 4: 10 best Restaurants in Atlanta (Sort By Price)</h2>
			<table class=\"food\">
			<tr>
				<th>Restaurant Name</th>
				<th>Average Cost ($)</th>
			</tr>	
			";	
			$restaurant = array (
				'Chama Gaucha' => 40.50,
				'Aviva by Kameel' => 15.00,
				'Bone’s Restaurant' => 65.00,
				'Umi Sushi Buckhead' => 40.50,
				'Fandangles' => 30.00,
				'Capital Grille' => 60.50,
				'Canoe' => 35.50,
				'One Flew South' => 21.00,
				'Fox Bros. BBQ' => 15.00,
				'South City Kitchen Midtown' => 29.00
			);
			asort($restaurant);
			foreach ($restaurant as $name => $price) {
				echo "<tr><td>".$name."</td><td>".money_format('%i', $price)."</td></tr>";
			}
			
			echo"</table>
			";
			echo "<h2>Question 4: 10 best Restaurants in Atlanta (Sort By Name)</h2>
			<table class=\"food\">
			<tr>
				<th>Restaurant Name</th>
				<th>Average Cost ($)</th>
			</tr>	
			";
			
			ksort($restaurant);
			foreach ($restaurant as $name => $price) {
				echo "<tr><td>".$name."</td><td>$".money_format('%i', $price)."</td></tr>";
			}
			echo"</table>
			";
			

		?>

		<hr/>
		<div id="menu">
		<h2 id="receipt">Question 5: total cost of this restaurant meal</h2>
		<form action="http://codd.cs.gsu.edu/~inwukor1/Assignment2/hw2.php#receipt" method="GET">
		  <label for="hamburgers">Hamburgers:</label>
		  <input type="number" id="hamburgers" name="quantity_hamburgers" value="<?php echo $_REQUEST['quantity_hamburgers']; ?>" placeholder="Enter Quantity" min="0">
		  <label for="lname">Chocolate Milk Shake:</label>
		  <input type="number" id="chocolate_milk_shake" name="quantity_chocolate_milk_shake" value="<?php echo $_REQUEST['quantity_chocolate_milk_shake']; ?>" placeholder="Enter Quantity" min="0">
		  
		  <label for="cola">Cola:</label>
		  <input type="number" id="cola" name="quantity_cola" value="<?php echo $_REQUEST['quantity_cola']; ?>" placeholder="Enter Quantity" min="0">
		  
		  <input type="submit" value="Calculate"/>
		</form> 


		<?php

			$foods = array (
				'hamburgers' => 4.95,
				'chocolate_milk_shake' => 1.95,
				'cola' => 0.85
			);
			echo "
			<table class=\"food\">
			<tr>
				<th>Food Item</th>
				<th>Quantity</th>
				<th>Total Cost ($)</th>
			</tr>	
			";
			$total = 0;
			
			foreach ($foods as $name => $price) {
				$total += ($price * (isset($_REQUEST['quantity_'.$name]) ? $_REQUEST['quantity_'.$name] : 1 ));
				echo "<tr><td>".$name."</td><td>x".(isset($_REQUEST['quantity_'.$name]) ? $_REQUEST['quantity_'.$name] : 1 )."</td><td>$".money_format('%i', ($price * (isset($_REQUEST['quantity_'.$name]) ? $_REQUEST['quantity_'.$name] : 1 )))."</td></tr>";
			}
				echo "<tr><td></td><td>Pretax Tip (16%):</td><td>$".money_format('%i', ($total*.16))."</td></tr>";
				$total +=($total*.16);
				echo "<tr><td></td><td>Sales Tax (7.5%):</td><td>$".money_format('%i', ($total*.075))."</td></tr>";
				$total += ($total*.075);
				echo "<tr><td></td><td>Total Cost:</td><td>$".money_format('%i', $total)."</td></tr>";

			
		?>
		</div>
</div>



	</body>
</html>