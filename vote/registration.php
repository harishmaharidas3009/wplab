<?php
include "connection.php";
if(isset($_POST['submit']))
{	
	$name=$_POST['name'];
	$mobno=$_POST['mobno'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];
	$addr=$_POST['addr'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	
	
$sql = "INSERT INTO `userdata` ( `name`, `mobno`, `pswd`, `cpswd`, `addr`, `dob`,`gender`) VALUES ( '$name', '$mobno', '$pswd', '$cpswd', '$addr', '$dob','$gender')";
$result=$conn->query($sql);
if($result==TRUE)
{
	die(header("location: http://localhost/vote/login.php"));

}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>



<html>
<head>
<title>online voting system registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
<h1>Online Voting System</h1>
</div>
<hr>
<div id="login">
<h2>Registration</h2>
</div>
<form action="" method="POST">
<input type="text" name="name" placeholder="Enter Name" required/>
<input type="text" name="mobno" lenght=10 placeholder="Enter mobile" required/><br><br>
<input type="password" name="pswd"  placeholder="Enter Password" required/>
<input type="password" name="cpswd"  placeholder="Confirm Password" required/><br><br>
<input type="text" name="addr" placeholder="Enter Address" required/><br><br>
<input type="text" name="dob" placeholder="DD/MM/YYYY" required/><br><br>
<center>
<div id="gender">
Genger:&nbsp; &nbsp;Male<input type="radio" name="gender" value="male">
Female<input type="radio" name="gender" value="female"></div><br>
<button 
	style="padding: 5px;
	border-radius: 5px;
	background-color: #0984e3;
	color: white;" type="submit" name="submit">
Register</button><br>
Already a User?<a href="login.php">login</a><br><br><a href="firsthome.php">home</a><br>
</center>

</form>
</body>
</html>