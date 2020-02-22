<html>
	<head>
		<title>InClass Assignment 5</title>
	</head>
	<body>
	<h1>In Class Assignment 5</h1>
		<h2>Question 1</h2>
		<p><em>
		<?php
		print '""Good morning, Dave," said HAL."';
		?></em>
		</p>
		<hr/>
		<h2>Question 2</h2>
		<p>Area A of a circle:</p>
		
		<?php
		$radius = 5;
		$pi = pi();
		$area = $pi*(pow($radius, 2));
		
		print 'The Area for radius of '.$radius.' is: '.$area.'<br/>';
		?>
		<hr/>
		<h2>Question 3</h2>
		<?php
			$tempr = -459.67;
			$celFahr = (float)((5 / 9)*($tempr - 32));		
		print 'The Conversion of '.$tempr.' F is '.$celFahr.' C in Celsius.';
		
		?>
		<hr/>
		<h2>Question 4</h2>
		<?php
		$string = "  PHP is fun   ";
		$strcount = strlen($string);
		print 'String is "'.$string.'". <br><strong>String has '.$strcount.' characters</strong>';
		
		?>
		
		<hr/>
		<h2>Question 5</h2>
		<?php
		$text_string = "WDWWLWWWLDDWDLL";
		$text_char = $text_string[strpos($text_string, "WWW")+3];
		print '<br> For "'.$text_string.'" the answer is "'.$text_char.'"';
		
		?>
		 
		
		<hr/>
		<h2>Question 6</h2>
		
		<?php
		$palin = "kayak";
		$palinr = strrev($palin);
		$is_palindrome = true;
		for ($i = 0; $i < strlen($palin); $i++) {
			if(strtolower($palin[$i]) != strtolower($palinr[$i])) {
			$is_palindrome = false;	
			}	
		}
		if ($is_palindrome == true) {
			print 'TRUE - "'.$palin.'" is a palindrome of "'.$palinr.'"';
		} else {
			print '<strong>FALSE - "'.$palin.'" is NOT a palindrome of "'.$palinr.'"</strong>';
		}
		?>
		
		
		<hr/>
		<h2>Question 7</h2>
		<?php
		$num = 7;
		if ($num % 2 == 1) {
			$num_type = "odd";
		} else {
			$num_type = "even";
		}
		
		print 'The number '.$num.' is '.$num_type;
		?>
		
		
		
		<hr/>
		<h2>Question 8</h2>
		
		<?php
		$current_year = date('Y');
		
	    $is_leap = false;
		if($current_year % 100 != 0){						
			if ($current_year % 4 == 0 || $current_year % 400 == 0) {
				$is_leap = true;
			}
		}
		if ($is_leap == true) {
			print 'TRUE - The year '.$current_year.' IS a leap year';
		} else {
			print '<strong>FALSE - The year '.$current_year.' IS NOT a leap year</strong>';
		}
		?>
		
		
	
	</body>
</html>