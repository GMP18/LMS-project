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
<body style="background: lightgreen">
<div id="header" style="background-color: white">
 <h2 style ="padding: 10px"><font face="Algerian">BOOK LIST</h2></font>

</div>
<div id="container">
  
    <center>
       <table border="1" align="center">
          <tr>
            <th width="200" height="50">BOOK ID</th>
            <th width="200" height="50">BOOK NAME</th>
            <th width="200" height="50">BOOK AUTHOR</th>
            <th width="200" height="50">BOOK ISSUE DATE</th>
            <th width="200" height="50">BOOK RETURN DATE</th>


          </tr>
<?php
     $g="SELECT * from `issuebooks` where `SUSN`='$_SESSION[us]'";
  $r=mysqli_query($link,$g);
  
     
      

  $q="SELECT * from `books` where `id` IN (select `bid` from `issuebooks` where `SUSN`='$_SESSION[us]');";
  $run=mysqli_query($link,$q);
  while($row=mysqli_fetch_array($run))
  {
    $id=$row['id'];
    $bookname=$row['bookname'];
    $bookauthor=$row['bookauthor'];
    for($i=0;$i<1;$i++)
    {
      $ro=mysqli_fetch_array($r);
     $i=$ro['ISSUE_DATE'];

      $d=$ro['RETURN_DATE'];
    
  
  
  
?>
  <tr>
    <td width="200" height="50"><center><?php echo $id ?></center></td>
    <td width="200" height="50"><center><?php echo $bookname ?></center></td>
    <td width="200" height="50"><center><?php echo $bookauthor ?></center></td>
    <td width="200" height="50"><center><?php echo $i ?></center></td>
    <td width="200" height="50"><center><?php echo $d ?></center></td>
   </tr> 
  
  <?php
    }
  }

  ?>

 
</table>
</center>

  
<h3><a href="uhome.php">BACK</a></h3>

</div>
</body>
</html>