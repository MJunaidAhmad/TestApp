<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login.php");
exit(); }
?>

<?php

if(isset($_POST['submit']))
{
	
	$field = $_POST['field'];
	$start_date = $_POST['start_date'];
	$year = $_POST['year'];
	$com = $_POST['com'];
	
include_once('../includes/conn.inc.php');

$queryinsertcampaign = "INSERT INTO `campaigns`(`field`, `start_date`, `year`, `commentaries`) VALUES ('$field','$start_date','$year','$com')";

$resultinsertcampaign = mysqli_query($con,$queryinsertcampaign);
	
if($resultinsertcampaign)
	{
		echo"<h3>Campaign Started</h3>";
	} else{
		echo"<h3>Error</h3>";
	}
	mysqli_close($con);
}

if(isset($_POST['close']))
{
	
	$camp = $_POST['id_campaign'];
	$finish_date = $_POST['finish_date'];
	
include_once('../includes/conn.inc.php');

$queryclosecampaign = "UPDATE `campaigns` SET `finish_date`='$finish_date' WHERE `id_campaign`='$camp'";

$resultclosecampaign = mysqli_query($con,$queryclosecampaign);
	
if($resultclosecampaign)
	{
	echo"<h3>Campaign closed</h3>";
	} else{
	echo"<h3>Error closing campaign</h3>";
	}
	mysqli_close($con);
}

?>

<html>
<head><title>New Campaign</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">New Campaign</td>
</tr>
<tr>
<td align="right">Field</td><td><input type="text" name="field"></td>
</tr>
<tr>
<td align="right">Start Date</td><td><input type="date" name="start_date"></td>
</tr>
<tr>
<td align="right">Year</td><td><input type="text" name="year"></td>
</tr>
<tr>
<td align="right">Commentaries</td><td><input type="text" name="com"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>
<tr>
<td align="right">Num Campaign</td><td><input type="text" name="id_campaign"></td>
</tr>
<tr>
<td align="right">Finish Date</td><td><input type="date" name="finish_date"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="close" value="Close Campaign"></td>
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