<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $pswd=$_POST['pswd'];

    $sql= " SELECT `uname`,`pswd` FROM `admin` WHERE `uname` = '$uname' and `pswd` = '$pswd'";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        echo "hello";
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
<link rel="stylesheet" href="adminstyle.css">
</head>
<body >
<div id="header">
<h1>Online Voting System</h1>
</div>
<hr>
<div id="bodysection">
<form action="adminview.php" method="POST">
<div id="login">
<h2>Admin Login</h2>
</div>
<input type="text" name="uname"  placeholder="Enter login_id" required/><br><br>
<input type="password" name="pswd" placeholder="enter password" required/><br><br>
<input type="submit" name="submit"><br><br><br><br>
<a href="login.php">user login</a><br><br><a href="firsthome.php">home</a>
</form>

</body>

</html>