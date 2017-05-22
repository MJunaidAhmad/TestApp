<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login.php");
exit(); }
?>

<?php

if(isset($_POST['submit']))
{
	
	$num = $_POST['num'];
	$name = $_POST['name'];
	$comp = $_POST['comp'];
	$gender = $_POST['gender'];
	$year = $_POST['year'];
	
include_once('../includes/conn.inc.php');

$queryinsertworker = "INSERT INTO `workers`(`num_worker`, `name`, `id_company`, `gender`, `year`) VALUES ('$num', '$name','$comp','$gender','$year')";

$resultinsertworker = mysqli_query($con,$queryinsertworker);
	
if($resultinsertworker)
	{
	echo"<h3>Worker Inserted</h3>";
	} else{
	echo"<h3>Data not Inserted</h3>";
	}
	mysqli_close($con);
}

?>

<html>
<head><title>New Worker</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">New Worker</td>
</tr>
<tr>
<td align="right">Worker Number</td><td><input type="text" name="num" required></td>
</tr>
<tr>
<td align="right">Name</td><td><input type="text" name="name" required></td>
</tr>
<tr>
<td align="right">Company</td><td><select name="comp" required> <?php
$hostname = "localhost";
$user = "root";
$password = "";
$db = "alenbaga";

$connection = mysqli_connect($hostname, $user, $password, $db);

$queryCompany = "SELECT * FROM `companies` WHERE 1";
$resultCompany = mysqli_query($connection,$queryCompany);

    while ($rowCompany = $resultCompany->fetch_assoc()) {
        echo "<option value=\"{$rowCompany['id_company']}\">";
        echo $rowCompany['name'];
        echo "</option>";
    }
?>
</td>
<tr>
<td align="right">Gender</td><td><select name="gender" required><option value="M">M</option><option value="F">F</option></td>
<tr>
<td align="right">Year</td><td><input type="text" name="year" required></td>
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