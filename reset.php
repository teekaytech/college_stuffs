<?php 

function my_header() { ?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Reset Password</title>
	 
	  <link rel="stylesheet" href="css/style.css" type="text/css">

	</head>
	<body class="oneColFixCtr">
	<div id="container">
	<div id="mainContent">
	<h1 align="center"><img src="images/collegelogo.jpg" alt="" <="" h1="" width="738" border="0">
	</h1><h3 align="center">Network Account Management Interface</h3>
	<hr>
<?php
}
function phone_reset() {
?>
	<fieldset>
	<div id="body_container">
	 <h2 id="page_body" align="center">Reset with Phone! </h2>
	 
	<form action="phone_reset.php" method="Post">
	<table align="center"> 

	<tbody>
	    <tr>
	        <td align="right"><p>Enter your registered username:</p></td>
	        <td><input name="user_name" type="text" required="required" placeholder="e.g. teekay_tech"></td>
	    </tr>
	    <tr>
	        <td align="right"><p>Enter one of your registered phone numbers:</p></td>
	        <td><input name="main_no" type="text" required="required" placeholder="e.g. 2341234567890" size=""></td>
	    </tr><tr><td><br></td></tr>
	    <tr>
	        <td colspan="2" align="center"><input value="Reset" type="submit" name="submit"></td>
	    </tr>
	</tbody></table><br>
 <?php } 

 function footer() { ?>
	</form>
		<table align="center" width="640"><tbody><tr><td style="background-color : #ffffff; color : #787878;">
		This System is for the use of authorized users only. Individuals using this computer system
		without	authority, or in excess of their authority, are subject to having their activities
		on this system monitored and recorded by system personnel. <br>
		In the course of monitoring individuals improperly using this system, or in the course of system maintenance, the activities
		of authorized users may also be monitored.<br> Anyone using this system expressly consents to such monitoring and is advised that if such monitoring reveals possible criminal activity, system personnel may provide the evidence of such monitoring to law enforcement
		officals.
		</td></tr></tbody></table>
	 </div>
	 </fieldset>
	<hr><p align="center">© Information Technology Unit, College of Medicine, University of Ibadan, Ibadan</p>
		<!-- end #mainContent --></div>
	<!-- end #container --></div>

	  </body></html>
<?php } 

function mail_reset() { ?>
	<fieldset>
	<div id="body_container">
	 <h2 id="page_body" align="center">Reset with Email! </h2>
	 
	<form action="mail_reset.php" method="Post">
	<table align="center"> 

	<tbody>
	    <tr>
	        <td align="right"><p>Enter your registered username:</p></td>
	        <td><input name="user_name" type="text" required="required" placeholder="teekay_tech"></td>
	    </tr>
	    <tr>
	        <td align="right"><p>Enter one of your registered email addresses:</p></td>
	        <td><input name="email" type="email" required="required" placeholder="olaleretaofeek@live.com"></td>
	    </tr><tr><td><br></td></tr>
	    <tr>
	        <td colspan="2" align="center"><input value="Reset" type="submit" name="submit"></td>
	    </tr>
	</tbody></table><br>
<?php } 
function null_info() { ?>
<script type="text/javascript">alert ("A field must be selected.");</script> <?php
}
?>
