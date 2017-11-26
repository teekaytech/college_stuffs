<?php

require_once("reset.php");

if (isset($_POST['submit'])) {
	$value1 = $_POST['options'];
	switch ($value1) {
		case 'ID_phone':
			try {
				my_header();
				phone_reset();
				footer();
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
			break;
		case 'ID_mail':
			try {
				my_header();
				mail_reset();
				footer();
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
			break;
		default:
				my_header();
				null_info();
				
				footer();
			break;
	}
}
?>