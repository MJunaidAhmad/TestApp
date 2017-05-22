<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location: ../login.php");
exit(); }
?>

<?php

if(isset($_POST['in']))
{
	$num = $_POST['num'];
	$camp = $_POST['camp'];
	
include_once('../includes/conn.inc.php');

$queryinsertin = "INSERT INTO `workers_hours`(`num_worker`, `id_campaign`,`date_in`) VALUES ('$num','$camp',now())";
$resultinsertin = mysqli_query($con,$queryinsertin);

if($resultinsertin)
{echo"<h3>Worker IN</h3>";}
else{"<h3>Error</h3>";}
mysqli_close($con);
}

if(isset($_POST['out']))
{
	$num = $_POST['num'];
	$camp = $_POST['camp'];
	
include_once('../includes/conn.inc.php');

$queryinsertout = "UPDATE `workers_hours` SET `date_out` = now() WHERE `num_worker` = '$num' and `id_campaign`= '$camp'";
$resulinsertout = mysqli_query($con,$queryinsertout);

if($resulinsertout){
echo"<h3>Worker Out</h3>";}
else{"<h3>Error</h3>";}
mysqli_close($con);
}
	
?>

<html>
<head><title>In & Out</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">Hours</td>
</tr>
<tr>
<td align="right">Worker Number</td><td><input type="text" name="num" required></td>
</tr>
<tr>
<td align="right">Campaign</td><td><input type="text" name="camp" value="<?php echo isset($_POST['camp']) ? $_POST['camp'] : '' ?>" required></td>
</tr>
<tr>
<td align="center"><input type="submit" name="in" value="IN"></td><td align="center"><input type="submit" name="out" value="OUT"></td>
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