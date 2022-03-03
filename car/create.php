<?php
include "config.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$carmodel=$_POST['car_model'];
	$price=$_POST['car_price'];

$sql = "INSERT INTO `cars` ( `name`, `address`, `mobile`, `car_model`, `car_price`) VALUES ( '$name', '$address', '$mobile', '$carmodel', '$price')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "new record created successfully";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<body align: center>
<h2> Signup Form </h2>
<form action="" method="POST">
<fieldset>
<legend> Personal Information </legend>
Name:<br>
<input type="text" name="name">
<br>
Address:<br>
<input type="text" name="address">
<br>
Mobile:
<br>
<input type="number" name="mobile">
<br>
Car Model:<br>
<input type="text" name="car_model">
<br>
Car Price:<br>
<input type="number" name="car_price" >
<br><br>
<input type="submit" name="submit" value="submit">
<a href="view.php"></a>
</fieldset>
</body>
</html>	