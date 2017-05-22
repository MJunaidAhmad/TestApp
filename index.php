<?php
//include auth.php file on all secure pages
include("auth.php");

//if(isset($_POST['125gr']))
//{
//header("Location: picking_125");
//exit(); }
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
<td align="center"><input type="button" value="125 GR" class="125grbutton" id="btn125gr" onClick="Javascript:window.location.href = 'picking_125';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="200 GR" class="200grbutton" id="btn200gr" onClick="Javascript:window.location.href = 'picking_200';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="250 GR" class="250grbutton" id="btn250gr" onClick="Javascript:window.location.href = 'picking_250';" /></td>
</tr>
<tr>
<td align="center"><input type="button" value="Menu" class="menubutton" id="menugr" onClick="Javascript:window.location.href = 'menu.php';" /></td>
</tr>
<tr>
<td colspan="5" align="center"><a href="logout.php">Logout</a></td>
</tr>
</table></center>
</form>
</body>
</html>