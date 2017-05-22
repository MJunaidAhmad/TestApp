<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
include_once('includes/conn.inc.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$num = stripslashes($_REQUEST['num']);
	$num = mysqli_real_escape_string($con,$num);
	$camp = stripslashes($_REQUEST['camp']);
	$camp = mysqli_real_escape_string($con,$num);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
	
	$check_email_query="select * from users WHERE username='$username'";  
    $run_query=mysqli_query($con,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Username $username already exists in our database, Please try another one!')</script>";  
exit();  
    }  
        $query = "INSERT into `users` (username, password, num_worker, id_campaign, trn_date)
VALUES ('$username', '".md5($password)."', '$num', '$camp', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="text" name="num" placeholder="Worker Number" required />
<input type="text" name="camp" placeholder="Campaign" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>