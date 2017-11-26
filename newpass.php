<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>New Password</title>

<script language="javascript"> 
 function reset_form() {
 	
	if (document.forms[0]) {
		//alert('Reset Form');
		document.forms[0].reset();
	}

}//end of function reset form
 
 </script>
 
  <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body class="oneColFixCtr" onload="javascript:reset_form(); return false;">
<div id="container">
<div id="mainContent">
<h1 align="center"><img src="images/collegelogo.jpg" alt="" <="" h1="" width="738" border="0">
</h1><h3 align="center">Network Account Management Interface</h3>
<hr>
<script language="JavaScript">

</script>
<fieldset>
<div id="body_container">
 <h2 id="page_body" align="center">Congratulations!</h2><br>
 
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="Post">
<table align="center" border="0">
<?php

// Was the form submitted?
if (isset($_POST["submit"])) {	

// Connect to MySQL
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "com";
    $pass_one = $_POST['code_one'];
    $pass_two = $_POST['code_two'];
    $alt_mail = $_POST['email'];
    $alt_phone = $_POST['alt_phone'];

	try {
		$conn = new PDO ("mysql:host=$hostname; dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Database connected!";

	if ($pass_one == $pass_two) {

		//updating the new password, alternate phone and email address
		$query = "UPDATE reset_table SET password=:pass_one, email_two=:mail, phone_two=:phone_two WHERE username=:teekay";
		$statement = $conn->prepare($query);
		$statement->execute(array('pass_one'=>$pass_one, 'mail'=>$alt_mail, 'phone_two'=>$alt_phone, 'teekay'=>'teekay'));
		if ($statement) { ?>
			<tr><td>Password reset successful.<a href="login.htm">Click here</a> to continue to login page.</td></tr> <?php
		} else { ?>
			 <tr><td>Password NOT successful. Check your parameters and try again, or <br> <a href="update_pwd.php">Click here</a> to try again.</td></tr> <?php }
		//update password in database
		//store/update email in database

	}
}
catch(PDOException $e) 
    { 
        echo $e -> getMessage();
    } 
   }
?>  

</table>
<br></form>
		<table align="center" width="640"><tbody><tr><td style="background-color : #ffffff; color : #787878;">
		This System is
		for the use of authorized users only. Individuals using this computer system
		without
		authority, or in excess of their authority, are subject to having their activities
		on this system
		monitored and recorded by system personnel. <br>
		In the course of monitoring individuals
		improperly using this system, or in the course of system maintenance, the activities
		of
		authorized users may also be monitored.<br> Anyone using this system expressly consents
		to
		such monitoring and is advised that if such monitoring reveals possible criminal
		activity,
  system personnel may provide the evidence of such monitoring to law enforcement
		officals.
	
		</td></tr></tbody></table>
 </div>
 </fieldset>
<hr><p align="center">© Information Technology Unit, College of Medicine, University of Ibadan, Ibadan</p>
	<!-- end #mainContent --></div>
<!-- end #container --></div>

  </body></html>
