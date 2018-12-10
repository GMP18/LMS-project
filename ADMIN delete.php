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
 <h2 style ="padding: 10px"><font face="Algerian">DELETE BOOK </h2>

</div>
<div id="container">
	<h3 style ="padding: 10px"><font face="Consolas">
	<br><br>
	<center>
		<form action ="" method="post">
	<table>
		<tr>
			
			<td width="200px" height="50px">ENTER BOOK ID</td>
			<td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="bid" placeholder ="Enter book id" required></td>
		</tr>
		
		 <tr>
				<td><input style="width:70px; height:25px;" type="submit" name="del" value="DELETE"></td>
	    </tr>
					
	</table>
</form>
</center>
<?php
   if(isset($_POST['del']))
   { 
   	 mysqli_select_db($link,"lib1");
   	$un=$_POST['bid'];
    $sql = "DELETE FROM `books` WHERE id=$un";
    
   $retval = mysqli_query( $link, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   
   }


  
?>
<h3><a href="ahome.php">BACK</a></h3>

</div>

</body>
</html>