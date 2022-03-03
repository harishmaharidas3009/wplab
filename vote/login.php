<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $mobno=$_POST['mobno'];
    $password=$_POST['pswd'];

    $sql= " SELECT `mobno`,`pswd` FROM `userdata` WHERE `mobno` = '$mobno' and `pswd` = '$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        die(header("location: http://localhost/vote/homefinal.html"));
    }
    else {
        echo "invalide mob number or password";
    }
    $conn->close();
}
?>


<html>
<head>
<title>Voting system</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
<div id="header">
<center><h1>Online Voting System</h1></center>
</div>
<hr>
<div id="bodysection">
<form action="" method="POST">
<div id="login">
<center><h2>Login</h2></center>
</div>
<center><input type="text" name="mobno"  placeholder="enter mobile" required/><br><br>
<input type="password" name="pswd"  placeholder="enter password" required/><br><br><br>
<input type="submit" name="submit"><br><br>
<div id="newuser">
<h3>New User?</h3><a href="registration.php">Register here</a></div><br><br><a href="firsthome.php">home</a></center>
</form>
</div>

</body>

</html>