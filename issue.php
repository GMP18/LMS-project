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
 <h2 style ="padding: 10px"><font face="Algerian">ISSUE </h2>

</div>
<div id="container">
  <h3 style ="padding: 10px"><font face="Consolas">
  <br><br>
  <center>
  <form action="" method="post">
  <table>
  
    <tr>
      <td width:"20px" height:"50px" >Id of books <br>available</td>

      <td>
        
        <select name="enr" class="form-control selectpicker" style="width:200px; height:25px" >
          <?php
            $res=mysqli_query($link,"SELECT `id` from `books`");
            while($row=mysqli_fetch_array($res))
            {
              echo "<option>";
              echo $row["id"];
              echo "</option>";
            }
          ?>
        </select></td>

             <td><input style="width:70px; height:25px;" type="submit" name="sel" value="SELECT"></td>
        
      </tr>
    </table>
  </form>
    <?php
       global $t;
        if(isset($_POST['sel']))
        {
          $t=$_POST['enr'];

        }
        ?>

        <form action="" method="post">
        <table>
      
    <tr>  
      <td width="200px" height="50px"><input style="width:200px; height:25px" type="text" name="bid"  placeholder ="ENTER BOOK ID" value="<?php echo $t; ?>"></td>
    </tr>
    
    <tr>  
      
      <td width="200px" height="50px"><input style="width:200px; height:25px"type="text" name="usn" placeholder ="ENTER USER USN" required></td>
    </tr>
    <tr>  
      
      <td width="200px" height="50px"><input style="width:200px; height:25px"type="text" name="nme" placeholder ="ENTER USER NAME" required></td>
    </tr>
    <tr>  
      
      <td width="200px" height="50px"><input style="width:200px; height:25px"type="text" name="uphno" placeholder ="ENTER PHONE NUMBER" required></td>
    </tr>
    <tr>  
    
      <td width="200px" height="50px"><input style="width:200px; height:25px"type="date" min="<?php echo date('Y-m-d'); ?>"name="isdate" placeholder ="ENTER ISSUE DATE" required></td>
    </tr>
    <tr>  
    
      <td width="200px" height="50px"><input style="width:200px; height:25px"type="date" min="<?php echo date('Y-m-d'); ?>" name="rtdate" placeholder ="ENTER RETURN DATE" required></td>
    </tr>
     <tr>
        <td><input style="width:70px; height:25px;" type="submit" name="isu" value="ISSUE"></td>
      </tr>
          
  </table>
</form>


<?php
   if(isset($_POST['isu']))
   {
        mysqli_select_db($link,"lib1");

        $l=mysqli_query($link,"SELECT count(*) cnt FROM `issuebooks` WHERE susn='".$_POST["usn"]."'");
        $il=mysqli_fetch_array($l);
        $c=$il['cnt'];
       
        if($c<=3)
        {
        if(mysqli_query($link,"INSERT INTO issuebooks (bid,SUSN,SNAME,SPHONE_NUMBER,ISSUE_DATE,RETURN_DATE)values ('".$_POST["bid"]."','".$_POST["usn"]."','".$_POST["nme"]."','".$_POST["uphno"]."','".$_POST["isdate"]."','".$_POST["rtdate"]."')"))
        {
          echo "<script>alert('issued Successfully')</script>";
        }
        else
        {
          echo "<script>alert('issue Unsuccesfull')</script>";
        }
      }
      else
      {
        echo "<script>alert('MAX THREE BOOKS CAN BE ISSUED')</script>";
      }
   }
?>
</center>

<h3><a href="ahome.php">BACK</a></h3>
</div>

</body>
</html>