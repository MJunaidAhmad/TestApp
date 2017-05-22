<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location: ../login.php");
exit(); }
?>

<?php

if(isset($_POST['cuvettesubmit']))
{
	$userid = $_SESSION['username'];
	$num = $_POST['num'];
	$quant = $_POST['quant'];
	$date = $_POST['date'];
	$camp = $_POST['camp'];
	
include_once('../includes/conn.inc.php');

$queryinsertcuvette = "INSERT INTO `picking`(`num_worker`, `id_packing_type`, `quantity`, `date`, `user_balance`, `id_campaign`) VALUES ('$num', '4','$quant','$date','$userid','$camp')";


$resultinsertcuvette = mysqli_query($con,$queryinsertcuvette);
	
if($resultinsertcuvette)
	{
	echo"<h3>Data Inserted</h3>";
	} else{
	echo"<h3>Data not Inserted</h3>";
	}
	mysqli_close($con);
}

if(isset($_POST['boxsubmit']))
{
	$userid = $_SESSION['username'];
	$num = $_POST['num'];
	$quant = $_POST['quant'];
	$date = $_POST['date'];
	$camp = $_POST['camp'];
	
include_once('../includes/conn.inc.php');

$queryinsertbox = "INSERT INTO `picking`(`num_worker`, `id_packing_type`, `quantity`, `date`, `user_balance`, `id_campaign`) VALUES ('$num', '3','$quant','$date','$userid','$camp')";


$resultinsertbox = mysqli_query($con,$queryinsertbox);
	
if($resultinsertbox)
	{
	echo"<h3>Data Inserted</h3>";
	} else{
	echo"<h3>Data not Inserted</h3>";
	}
	mysqli_close($con);
}

if(isset($_POST['cupsubmit']))
{
	$userid = $_SESSION['username'];
	$num = $_POST['num'];
	$quant = $_POST['quant'];
	$date = $_POST['date'];
	$camp = $_POST['camp'];
	
include_once('../includes/conn.inc.php');

$queryinsertcup = "INSERT INTO `picking`(`num_worker`, `id_packing_type`, `quantity`, `date`, `user_balance`, `id_campaign`) VALUES ('$num', '99','$quant','$date','$userid','$camp')";


$resultinsertcup = mysqli_query($con,$queryinsertcup);
	
if($resultinsertcup)
	{
	echo"<h3>Data Inserted</h3>";
	} else{
	echo"<h3>Data not Inserted</h3>";
	}
	mysqli_close($con);
}

if(isset($_POST['delete']))
{
	$userid = $_SESSION['username'];
	
include_once('../includes/conn.inc.php');

$querydelete = "DELETE FROM `picking` WHERE `user_balance`= '$userid' ORDER BY `id_picking` DESC LIMIT 1";
$resultdelete = mysqli_query($con,$querydelete);

if($resultdelete)
	{
	echo"<h3>Data Deleted</h3>";
	} else{
	echo"<h3>Data not Deleted</h3>";
	}
	mysqli_close($con);
}


?>

<html>
<head><title>Picking 200Gr</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">Picking 200Gr</td>
</tr>
<tr>
<td align="right">Date</td><td><input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : '' ?>" required></td>
<tr>
<td align="right">Campaign</td><td><input type="text" name="camp" value="<?php echo isset($_POST['camp']) ? $_POST['camp'] : '' ?>" required></td>
</tr>
<tr>
<td align="right">Worker Number</td><td><input type="text" name="num"></td>
</tr>
<tr>
<td align="right">Quantity</td><td><input type="text" name="quant"></td>
</tr>
<tr>
<td align="center"><input type="submit" name="cuvettesubmit" value="Cuvette"></td><td align="center"><input type="submit" name="boxsubmit" value="Box"></td><td align="center"><input type="submit" name="cupsubmit" value="Cup"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="delete" value="Delete Last Record"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="button" value="Back" class="backbutton" id="btnback" onClick="Javascript:window.location.href = '../index.php';" /></td>
</tr>
<tr>
<td colspan="5" align="center"><a href="../logout.php">Logout</a></td>
</tr>
</table></center>
</form>
</body>
</html>