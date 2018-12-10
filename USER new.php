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
	 <h2 style ="padding: 10px"><font face="Algerian">USER REGISTRATION</h2>
 </font>

</div>
<div id="container">
	<center>
		<form action ="" method="post">
		<table>
	<tr>
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="name" placeholder ="ENTER USERNAME" required></td>
	</tr>
	<tr>		
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="password" name="ps" placeholder ="ENTER PASSWORD" required></td>
	</tr>
	<tr>			
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="sn" placeholder ="USN" required></td>
	</tr>
	<tr>			
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="pn" placeholder ="PHONE NUMBER" required></td>
	</tr>
	<tr>			
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="em" placeholder ="EMAIL" required></td>
	</tr>
	<tr>
				<td><input style="width:85px; height:25px;" type="submit" name="reg" value="REGISTER"></td>
    </tr>

</center>
</table>
</form>
<?php
   if(isset($_POST['reg']))
   {
   	    mysqli_select_db($link,"lib1");
   	   
   	    if(mysqli_query($link,"INSERT INTO user (USERNAME,PASSWORD,USN,PHONE_NUMBER,EMAIL)values ('".$_POST["name"]."','".$_POST["ps"]."','".$_POST["sn"]."','".$_POST["pn"]."','".$_POST["em"]."')"))
   	    {
   	    	echo "<script>alert('Registered Successfully')</script>";
   	    }
   	    else
   	    {
   	    	echo "<script>alert('Registeration Unsuccesfull')</script>";
   	    }
   }
?>
</div>
<h3><a href="index.php">BACK</a></h3>

</body>
</html>