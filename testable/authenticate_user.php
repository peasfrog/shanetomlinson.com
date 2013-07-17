<?php
	$svr = $_SERVER;
	$formData = array();
	foreach ($_POST as $key => $value){
		$formData[$key] = $value;
		echo $formData[$key];
	}
?>
