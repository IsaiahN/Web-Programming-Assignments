<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>InClassAssignment 6</title>
		<?php
		date_default_timezone_set("America/New_York");
			$colors 		= array("Red", "Orange", "Yellow", "Green", "Blue", "Indigo", "Violet");
			$text_weight 	= array("normal", "bold", "bolder", "lighter");
			$fonts 			= array("Arial", "Helvetica", "Arial Black", "Comic Sans MS", "Georgia", "Lucida Sans Unicode");

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$final_color 	= $colors[$_POST["text_color"]];
				$final_weight 	= $text_weight[$_POST["text_weight"]];
				$final_font 	= $fonts[$_POST["font_family"]];
				$final_size 	= $_POST["font_size"];
			
			}
		?>
		<style>
			#resulting_text {
				font-size: <?php echo $final_size;?>px;
				color: <?php echo $final_color;?>;
				font-family: "<?php echo $final_font;?>", sans-serif;
				font-weight: <?php echo $final_weight;?>;
				width: 50%;
				height:300px;
			}
		</style>
	</head>
	<body>	
		<div id="wrapper">
<h1>In Class Assignment 6</h1>		
<hr/>
<h2>Part 1</h2>
<form method="POST" action="./index.php">
	<label>Text Color:</label><br>
	<select id="text_color" name="text_color">
		<?php for ($i = 0; $i <= count($colors); $i++) { ?>
		<option value="<?php echo $i;?>" <?php echo ( $_POST['text_color'] == $i ? "selected" : "");?>><?php echo $colors[$i];?></option>
		<?php } ?>
	</select><br><br>

	<label>Font Weight:</label><br>
	<select id="text_weight" name="text_weight">
		<?php for ($i = 0; $i <= count($text_weight); $i++) { ?>
		<option value="<?php echo $i;?>" <?php echo ( $_POST['text_weight'] == $i ? "selected" : "");?>><?php echo $text_weight[$i];?></option>
		<?php } ?>
	</select><br><br>

	<label>Font Family:</label><br>
	<select id="font_family" name="font_family">
		<?php for ($i = 0; $i <= count($fonts); $i++) { ?>
		<option value="<?php echo $i;?>" <?php echo ($_POST['font_family'] == $i ? "selected" : "");?> > <?php echo $fonts[$i]; ?></option>
		<?php } ?>
	</select><br><br>


	<label for="font_size">Font Size (In PX):</label><br>
	<input type="number" min="11" id="font_size" name="font_size" value="<?php echo $_POST['font_size'];?>"><br><br>
	<input type="submit" value="Submit">
	<br/><br/>
	<label for="resulting_text">Dynamically Styled Text Area</label>
<br/>
<textarea id="resulting_text" name="resulting_text" rows="4" cols="50" placeholder="Place your text here....">
<?php echo $_POST['resulting_text'];?>
</textarea>

</form> 


<h2>Part 2</h2>
		
		<?php
			$tasks = array(	"Assigned A Task One", "Trendy Task Two", "Something Task 3", "Odd Task 4", 
						"Forebearing Task 5", "Hard Task 6", "Bad Task 7", "Trendy Task 8", 
						"Nifty Task 9", "Tiresome Task 10", "Funny Task 11", "Dastardly Task 12");
			$hours_to_show = 12;
		?>
		
		<table class="calendar">
				<tr>
					<th>Date: <?php echo date("Y/m/d");?></th>
					<th>Time: <?php echo date("h:i a");?></th>
				</tr>
			<?php for ($i = 0; $i < $hours_to_show; $i++) { ?>
				<tr>
					<td><?php echo date('h:00a', strtotime('+'.$i.' hour')); ?></td>
					<td>Task: <?php echo $tasks[$i];?></td>
				</tr>	
			<?php } ?>
			</table>
		</div>
	</body>
</html>