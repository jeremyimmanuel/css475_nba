<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Usbwebserver</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	
</head>
<body>
	<div id="container">
		<img id="header" src="images/header.png">
		<div id="topcontent"></div>
		<div id="content">
		<h1>USBWebserver 8.5</h1>
			<p>
				USBWebserver 8.5 is running on your system<br>
				For questions e-mail to: mail@usbwebserver.net
			</p>
			<p>
				<a href="phpinfo.php">Click here to go to the PHPINFO file</a>
			</p>


		</div>
		<div id="botcontent"></div>
		<div id="footer">Copyright 2010 USBWebserver, <a style="color: #81ACCE;" href="http://www.border-it.nl/">Border-IT</a></div>
	</div>
</body>
</html> -->
<html>
<head>
</head>

<body>
<h1>TEAM AVATAR</h1>
<h2>NBA Database</h2>
<h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>

<?php
include "db_connect.php";

//include "show_all_teams.php";

//include "fname_james.php";
?>

<form action = "search_player_result.php">
  First name:
  <input type="text" fname="firstname">
  Last name:
  <input type="text" lname="lastname"><br>

  <input type = "submit" value = "Submit">
</form>



<?php
$mysqli->close();
?>


</body>
</html>