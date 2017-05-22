<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location: ../login.php");
exit(); }
?>

<?php

if(isset($_POST['hours1submit']))
{
	$date = $_POST['date'];
	$hours = $_POST['hours'];
	
include_once('../includes/conn.inc.php');

$queryinserthourstemp = "INSERT INTO `temp_hours`(`date`, `hours`) VALUES ('$date','$hours')";

$resultinserthourstemp = mysqli_query($con,$queryinserthourstemp);


	
if(!$resultinserthourstemp)
	{
	echo"<h3>Hours not inserted</h3>";
		} else{

				$queryinsertgeneral = "INSERT INTO `hours`(`num_worker`, `date`, `hours`) SELECT DISTINCT A.num_worker, B.date, B.hours FROM `picking` as A, `temp_hours` as B WHERE A.`date`='$date'";

				$resultinsertgeneral = mysqli_query($con,$queryinsertgeneral);

					if(!$resultinserthourstemp)
					{
					echo"<h3>Hours not inserted</h3>";
					} else{
							$querydeletetemphours = "DELETE FROM `temp_hours` WHERE 1";
							
							$resultdeletetemphours = mysqli_query($con,$querydeletetemphours);
							
							if($resultdeletetemphours)
							{
								echo"<h3>Hours inserted</h3>";
							} else{
								echo"<h3>Hours not inserted</h3>";
							}
					}
		}
		mysqli_close($con);
}

if(isset($_POST['hours2submit']))
{
	$num = $_POST['num'];
	$date = $_POST['date'];
	$hours = $_POST['hours'];
	
include_once('../includes/conn.inc.php');

$queryreplacehours = "UPDATE `hours` SET `hours` = '$hours' WHERE `date` = '$date' and `num_worker`= '$num'";
$resultreplacehours = mysqli_query($con,$queryreplacehours);

if($resultreplacehours)
{echo"<h3>Hours Replaced</h3>";}else{"<h3>Hours Not Replaced</h3>";}}
	
?>

<html>
<head><title>Hours</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">Hours</td>
</tr>
<tr>
<td align="right">Worker Number</td><td><input type="text" name="num"></td>
</tr>
<tr>
<td align="right">Date</td><td><input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : '' ?>" required></td>
</tr>
<tr>
<td align="right">Hours</td><td><input type="text" name="hours" required></td>
</tr>
<tr>
<td align="center"><input type="submit" name="hours1submit" value="Hours General"></td><td align="center"><input type="submit" name="hours2submit" value="Replace Hours"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="button" value="Back" class="backbutton" id="btnback" onClick="Javascript:window.location.href = '../menu.php';" /></td>
</tr>
<tr>
<td colspan="5" align="center"><a href="../logout.php">Logout</a></td>
</tr>
</table></center>
</form>
</body>
</html>