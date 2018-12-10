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
 <h2 style ="padding: 10px"><font face="Algerian">RETURN</h2>

</div>
<div id="container">
	<h3 style ="padding: 10px"><font face="Consolas">
	<br><br>
	<center>
		<form action ="" method="post">
	<table>
		<tr>
			
			
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="bid" placeholder ="ENTER BOOK ID" required></td>
		</tr>
			<tr>	
			
			<td width="200px" height="50px"><input style="width:200px; height:25px"type="text" name="usn" placeholder ="ENTER USER USN" required></td>
		</tr>
	    <tr>
				<td><input style="width:70px; height:25px;" type="submit" name="ret" value="RETURN"></td>
	    </tr>
					
	</table>
</form>
</center>
<?php
   if(isset($_POST['ret']))
   {
    mysqli_select_db($link,"lib1"); 
   	$un=$_POST['bid'];
    $bd=$_POST['usn'];
    $sql = "DELETE FROM `issuebooks` WHERE `bid`='$un' AND `SUSN`='$bd'";
    
  		 if (mysqli_query( $link, $sql ))
   		{
   			echo "<script>alert('Returned successfully')</script>";
   		}
   		else
   		{
   			echo "<script>alert('Return unsuccessfull')</script>";
   		}
   }
  
?>
<h3><a href="ahome.php">BACK</a></h3>

</div>

</body>
</html>