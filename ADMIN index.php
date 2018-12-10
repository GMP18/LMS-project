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
 <h2 style ="padding: 10px"><font face="Algerian">ADMIN LOGIN</h2>

</div>
<div id="container">
	<h3 style ="padding: 10px"><font face="Consolas">
	<br><br><center>
	SIGN IN	
	<br><br><center>
		<form action ="" method="post">
		<table >

			<tr>
				<td width:"200px" height:"50px" >ADMINNAME</td>
				<td width:"200px" height:"50px" ><input style="width:200px; height:25px;" type="text" name="u" placeholder="ENTER ADMINNAME"></td>
			</tr>
			<tr>
				<td width:"200px" height:"50px" >PASSWORD</td>
				<td width:"200px" height:"50px" ><input style="width:200px; height:25px;" type="password" name="p" placeholder="ENTER PASSWORD"></td>
			</tr>
			<tr>
				<td><input style="width:60px; height:25px;" type="submit" name="sub" value="LOGIN"></td>
			</tr>
			


	</h3>
</table>
</form>
<?php
   if(isset($_POST['sub']))
   {
   		$un=$_POST['u'];
   		$ps=$_POST['p'];
   		$q="SELECT `un`,`ps` from `admin` where `un`='$un' and `ps`='$ps'";
   		$run=mysqli_query($link,$q);
   		$row=mysqli_fetch_array($run);
   		$u=$row['un'];
   		$p=$row['ps'];

   		if($un==$u and $ps==$p)
   		{
   			header("location:ahome.php");

   		}
   		else
   		{
   			header("location:index.php?WRONG USER");
   		}

   }
?>
</center>
</center>
<h3><a href="../index.php">BACK</a></h3>

</div>
</body>
</html>