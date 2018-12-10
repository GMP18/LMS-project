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
	 <h2 style ="padding: 10px"><font face="Algerian">BOOK REGISTRATION</h2>
 </font>

</div>
<div id="container">
	<center>
		<form action ="" method="post">
		<table>
	<tr>
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="id" placeholder ="ENTER BOOK ID" required></td>
	</tr>
	<tr>		
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="bn" placeholder ="ENTER BOOK NAME" required></td>
	</tr>
	<tr>			
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="an" placeholder ="ENTER AUTHOR NAME" required></td>
	</tr>
	
	<tr>
				<td><input style="width:85px; height:25px;" type="submit" name="ent" value="ENTER"></td>
    </tr>

</center>
</table>
</form>
</center>
<?php
   if(isset($_POST['ent']))
   {
   	    mysqli_select_db($link,"lib1");
   	   
   	    mysqli_query($link,"INSERT INTO books (id,bookname,bookauthor)values ('".$_POST["id"]."','".$_POST["bn"]."','".$_POST["an"]."')");
   }
?>

<h3><a href="ahome.php">BACK</a></h3>

</div>


</body>
</html>