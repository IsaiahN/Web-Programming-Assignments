<?php
	// include functions
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		include('validationUtilities.php');
		
		$is_valid = false;
		$error = array();
		
		if(IsValidDate($_POST["bday"]) 			== false) 	{ $error[] = "Date is Invalid";}
		if(fIsValidZipcode($_POST["zip"]) 		== false) 	{ $error[] = "Zipcode is Invalid";}
		if(fIsValidRange($_POST["age"], 0, 120) == false) 	{ $error[] = "Age is Invalid";}
		
		
		if(sizeof($error) == 0 ) {
				$is_valid = true;
				header("Location: ./validate.php?valid=true");
				die();
		} else {
				//echo "Errors:".implode("\r\n-",$error);
				header("Location: ./validate.php?valid=false&errors=".implode("|",$error));
				die();
		}
	}
?>