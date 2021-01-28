<html>
    <body>
    <?php

$con = mysqli_connect("localhost","root","");
if (!$con)
  { die('Could not connect: ' . mysqli_error()); }
mysqli_select_db($con, 'puzzles');
if(isset($_POST['No_of_Guests']) && isset($_POST['FSection']) && isset($_POST['FDate']) && isset($_POST['FTime']))
{
   $sql="INSERT INTO reserve_table (No_of_Guests,FSection,FDate,FTime) VALUES ('$_POST[No_of_Guests]','$_POST[FSection]','$_POST[FDate]','$_POST[FTime]')";
}
if (!mysqli_query($con,$sql))
{ die('Error: ' . mysqli_error($con)); }
echo "Response Recorded";
mysqli_close($con)
?>  
</body>
</html>