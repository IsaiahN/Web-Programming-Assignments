<?php
	function IsValidDate($bday) {
		$bday_test = date("Y-m-d", strtotime($bday));
		 $today = new DateTime();
		if ($bday == $bday_test && $bday_test <= $today) {
			return true;
		} else {
			return false;
		}
	}

	function fIsValidRange($value, $min, $max) {
		if (is_numeric($value) && $value >=  $min && $value <= $max && fIsValidLength($value) ) {
			return true;
		}
		else {
			return false;
		}
	}
	
	function fIsValidLength($value) {
		return (strlen($value) > 0);
	}
	
	function fIsValidZipcode($value) {
		return ((strlen($value) == 5) && is_numeric($value));
	}
?>