<?php


$fname    = $_POST["First_Name:"];
$lname	  = $_POST["Last_Name:"];
$company    = $_POST["Company_Name:"];
$address    = $_POST["Address:"];
$city    = $_POST["City:"];
$province   = $_POST["Province:"];
$p   = $_POST["Postal_Code:"];
$email	  = $_POST["E-Mail:"];
$tel      = $_POST["Office_Telephone:"];
$cel      = $_POST["Cell:"];
$comments      = $_POST["Comments:"];
$ToEmail    = "info@admiraltravels.com";
$ToSubject       = "Email from  Feedback Form";



if ($fname == "") {
	print "<font face=arial color=black size=\"2\">Please enter your First Name!<br><br><a href=javascript:history.go(-1)> [ Go Back ]</a>.</font>";
	exit;
}
if ($lname == "") {
	print "<font face=arial color=black size=\"2\">Please enter your Last Name!<br><br><a href=javascript:history.go(-1)> [ Go Back ]</a>.</font>";
	exit;
}
if ($email == "") {
	print "<font face=arial color=black size=\"2\">Please enter your Email!<br><br><a href=javascript:history.go(-1)> [ Go Back ]</a>.</font>";
	exit;
}
if ($tel == "") {
	print "<font face=arial color=black size=\"2\">Please enter your Telephone Number<br><br><a href=javascript:history.go(-1)> [ Go Back ]</a>.</font>";
	exit;
}

if ($comments == "") {
	print "<font face=arial color=black size=\"2\">Please enter the comments, you wish to send<br><br><a href=javascript:history.go(-1)> [ Go Back ]</a>.</font>";
	exit;
}

$Message       = "Here is the result:\n-------------------------\n

Name:				$fname.$lname
Company:			$company
Address:			$address
City:				$city
Province/State:		$province
Postal/Zip:			$p
E-Mail:			$email
Telephone:			$tel
Cellular:			$cel
Comments:			$comments\n";

//headers
$Headers = 'From: '.$$fname.'<'.$email.'>' . "\r\n";

mail($ToEmail,$ToSubject,$Message,$Headers);

header ('Location: http://wwww.admiraltravels.com');
?>