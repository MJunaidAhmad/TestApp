<?php
//include auth.php file on all secure pages
session_start();
if($_SESSION['username']<>'alenbaga'){
header("Location: login.php");
exit(); }
	

?>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<html>
<head><title>Picking 125Gr</title></head>
<body>
<form action="index.php" method="post">
<marquee><h2>WELCOME</h2></marquee>
<center><table border="1" width="800" height="800">
<tr>
<td colspan="5" align="center" bgcolor="grey">Picking Menu</td>
</tr>
<tr>
<td align="center"><input type="button" value="hours" class="hoursbutton" id="btnhours" onClick="Javascript:window.location.href = 'hours';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="workers" class="workersbutton" id="btnworkers" onClick="Javascript:window.location.href = 'workers';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="companies" class="companiesbutton" id="btncompanies" onClick="Javascript:window.location.href = 'companies';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="campaigns" class="campaignsbutton" id="btncampaigns" onClick="Javascript:window.location.href = 'campaigns';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="picking" class="pickingbutton" id="btnpicking" onClick="Javascript:window.location.href = 'index.php';" /></td>
</tr>
<tr>
<td colspan="5" align="center"><a href="logout.php">Logout</a></td>
</tr>
</table></center>
</form>
</body>
</html>