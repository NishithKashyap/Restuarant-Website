<html>
    <body>
    <?php

$con = mysqli_connect("localhost","root","");
if (!$con)
  { die('Could not connect: ' . mysqli_error()); }
mysqli_select_db($con, 'puzzles');
if(isset($_POST['Fname']) && isset($_POST['Mobile']) && isset($_POST['Email']) && isset($_POST['FAddress']) && isset($_POST['Requirement']))
{
   $sql="INSERT INTO event_booking (Fname,Mobile,Email,FAddress,Requirement) VALUES ('$_POST[Fname]','$_POST[Mobile]','$_POST[Email]','$_POST[FAddress]','$_POST[Requirement]')";
}
if (!mysqli_query($con,$sql))
{ die('Error: ' . mysqli_error($con)); }
echo "Response Recored";
mysqli_close($con)
?>  
</body>
</html>