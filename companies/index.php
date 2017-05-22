<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login.php");
exit(); }
?>

<?php

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	
include_once('../includes/conn.inc.php');

$queryinsertcompany = "INSERT INTO `companies`(`name`) VALUES ('$name')";

$resultinsertcompany = mysqli_query($con,$queryinsertcompany);
	
if($resultinsertcompany)
	{
	echo"<h3>Data Inserted</h3>";
	} else{
	echo"<h3>Data not Inserted</h3>";
	}
	mysqli_close($con);
}

?>

<html>
<head><title>New Company</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">New Company</td>
</tr>
<tr>
<td align="right">Name</td><td><input type="text" name="name" required></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="submit"></td>
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