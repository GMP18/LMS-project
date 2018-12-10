<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body style="background-color: lightgreen">
<div id="header" style="background-color: white">
 <h2 style ="padding: 10px"><font face="Algerian">USER HOME
<br><br>
 </h2>

</div>
<div id="container">
	<h3 style ="padding: 10px"><font face="Consolas">WELCOME
	 
	<center>
<table>
	<tr>
		
		<td><a href="booklist.php ">BOOK LIST</a><br><br></td>
	</tr>
	<tr>
		<br><br>
		<td><a href="booklist2.php ">MY BOOKS</a><br><br></td>
	</tr>
	<tr>
		<br><br>
		<td><a href="help.php">HELP</a><br><br></td>
	</tr>

</table>
</center>
<h3><a href="index.php">LOGOUT</a></h3>

</div>
</body>
</html>