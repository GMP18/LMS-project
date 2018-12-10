<?php
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
 <h2 style ="padding: 10px"><font face="Algerian">ADMIN HOME</h2>

</div>
<div id="container">
	<h3 style ="padding: 10px"><font face="Consolas">WELCOME
	

	<br><br><center>
		<table>
			<tr>
		<br><br>
		<td><a href="newbook.php">ADD BOOK </a><br><br></td>
		    <tr>
		
		<tr>
		<td><a href="delete.php">DELETE BOOK </a><br><br></td>
	</tr>
		
		<tr>
	
	    <td><a href="booklist.php">BOOK LIST </a><br><br></td>
	</tr>
       
        <tr>
		<td><a href="issue.php">ISSUE </a><br><br></td>
	</tr>
		
		<tr>
		<td><a href="return.php">RETURN </a><br><br></td>
		</tr>
	</h3>
</table>
	

</center>
<h3><a href="index.php">LOGOUT</a></h3>

</div>
</body>
</html>