<?php
require_once("reset.php");
my_header(); ?>
<fieldset>
	<div id="body_container">
	<h2 id="page_body" align="center">Email Reset Mode</h2><br>
	 
	<!-- <form action="#" method="Post"> -->
	<table align="center" border="0">
	<?php
	// Connect to MySQL
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "com";

	try {
		$conn = new PDO ("mysql:host=$hostname; dbname=$dbname", $username, $password);
		$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Was the form submitted?
		if (isset($_POST["submit"])) {

			//capturing reset form with phone number data
			$name_one = $_POST['user_name'];
	    	$email = $_POST['email'];

			try {
			$result = $conn -> query('SELECT * FROM reset_table');
			//$row_count = $result->rowCount(); //counting number of rows in $result resource
			//echo $row_count.' rows selected <br/>';

			//initializing boolean value
			$mybool = false;
			$dbun;

			//4. Use returned data
			foreach ($result as $row) {
				if (($name_one==$row['username']) && (($email==$row['email']) || ($email==$row['email_two']))) {

					//call the code generator function

					//change boolean value
					$mybool = true;
					$dbun = $row['username'];
					break;
				}
					
			}
			if ($mybool) {
				echo '<p align="center">Dear '. $dbun .', a password reset link has been sent to your registered mail...<br>Please, check your inbox and click on the link to reset your password.<br>You can <a href="#">Resend Link</a> here.</p>';
				}else {
					echo '<p align="center">Either Username and email address does not match, or Account does not exist!, <br><a href="user_option.html">Click here</a> to try again or contact Information Technology Unit.</p> ';
				}

		}
		catch (Exception $e) {
				echo $e -> getMessage();
			}
		}
	}catch (Exception $e) {
		echo $e -> getMessage();
	}	
			
	// 		// Check to see if a user exists with this username and phone number
	// 		$query = $conn->prepare('SELECT username, phone_no FROM reset_table WHERE phone_no=:p_number');
	// 		$query->bindParam(':p_number', $p_number);
	// 		$query->execute();	
	// 		$userExists = $query->fetch(PDO::FETCH_ASSOC);	
	// 		// echo '<table align="center"> <tr><td>Number fetched!</td></tr></table>';

	// 		$conn = null;
			
	// 		if ($userExists)
	// 		{
	// 			echo '<p align="center">password reset code has been sent to the phone number...<br>Please, check your inbox to fetch the code. <br><a href="codee.html">Click here</a> to enter code sent.</p>';
	// 		}
	// 		else
	// 			echo '<table align="center"><tr><td>This number does not exist on our Database. Contact Information Technology Unit.</td></tr></table>';
	// 	}
	// }
	// catch(PDOException $e) 
	//     { 
	//         echo $e -> getMessage();
	//     } 
	echo "<br>"; 
	footer();
	?>  