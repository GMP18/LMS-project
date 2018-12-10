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
<div id="header"  style="background-color: white">
 <h2 style ="padding: 10px"><font face="Algerian">USER LOGIN</h2>

</div>
<div id="container">
	<h3 style ="padding: 10px"><font face="Consolas">
	<br><br><center>
	<form action ="" method="post">
		
		<table >
			<tr>
				<td width:"200px" height:"50px" >USN</td>
				<td width:"200px" height:"50px" ><input style="width:200px; height:25px;" type="text" name="us" placeholder="ENTER USERNAME"></td>
			</tr>
			<tr>
				<td width:"200px" height:"50px" >PASSWORD</td>
				<td width:"200px" height:"50px" ><input style="width:200px; height:25px;" type="password" name="ps" placeholder="ENTER PASSWORD"></td>
			</tr>
			<tr>
				<td><input style="width:60px; height:25px;" type="submit" name="sub" value="LOGIN"></td>
			</tr>

	</h3>
	</table>
	</center>
	<h4> new user
		 <a href="new.php">Click here</a>
	</h4>

</form>

</div>
<?php
   if(isset($_POST['sub']))
   {
   		$us=$_POST['us'];
   		$ps=$_POST['ps'];
   		$q="SELECT * from `user` where `USN`='$us' and `PASSWORD`='$ps'";
   		$run=mysqli_query($link,$q);
   		$row=mysqli_fetch_array($run);
   		$u=$row['USN'];
   		$p=$row['PASSWORD'];
   		$g=$row['USERNAME'];


   		
   		$_SESSION[us]=$_POST[us];
   		

   		if($us==$u and $ps==$p)
   		{
   			header("location:uhome.php");

   		}
   		else
   		{
   			header("location:index.php?WRONG USER");
   		}

   }
?>
</center>
<h3><a href="../index.php">BACK</a></h3>

</div>
</body>
</html>