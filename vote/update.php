<?php 

include "connection.php";

    if (isset($_POST['update'])) 
    {

        $id = $_POST['id'];
            
        $name =$_POST ['name'];

        $mobno = $_POST['mobno'];

        $pswd = $_POST['pswd'];

        $cpswd = $_POST['cpswd'];

        $addr = $_POST['addr'];

        $dob = $_POST['dob'];

        $gender  = $_POST['gender'];

        $sql1 = "UPDATE `userdata` SET `name`='$name',`mobno`='$mobno',`pswd`='$pswd',`cpswd`='$cpswd',`addr`='$addr', `dob`='$dob', `gender`='$gender' WHERE `id`='$id'"; 

        $result = $conn->query($sql1); 

        if ($result == TRUE) 
        {

            die(header("location: http://localhost/vote/adminview.php"));

        }else
        {

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) 
{

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `userdata` WHERE `id` = '$id'";

    $result = $conn->query($sql);  
    if ($result->num_rows > 0) 
    {        

        while ($row = $result->fetch_assoc()) 
        {
            $id = $row['id'];
            
            $name = $row['name'];

            $mobno = $row['mobno'];

            $pswd = $row['pswd'];

            $cpswd = $row['cpswd'];

            $addr = $row['addr'];

            $dob = $row['dob'];

            $gender  = $row['gender'];

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
<form action="adminview.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" name="name" placeholder="Enter Name" value="<?php echo $name;?>">
<input type="text" name="mobno" lenght="10" placeholder="Enter mobile" value="<?php echo $mobno;?>"><br><br>
<input type="text" name="pswd"  placeholder="Enter Password" value="<?php echo $pswd;?>">
<input type="text" name="cpswd"  placeholder="Confirm Password" value="<?php echo $cpswd;?>"><br><br>
<input type="text" name="addr" placeholder="Enter Address" value="<?php echo $addr;?>"><br><br>
Date of Birth<br>
<input type="text" name="dob" placeholder="DD/MM/YYYY"  value="<?php echo $dob;?>"><br><br>
<center>
<div id="gender">
Genger:&nbsp; &nbsp;Male<input type="radio" name="gender" value="male" <?php if($gender == 'male'){ echo "checked";} ?>>
Female<input type="radio" name="gender" value="female" <?php if($gender == 'female'){ echo "checked";} ?>></div><br>
<input type="submit" name="update" value="Update">
</center>
</form>
</body>
</html>


<?php

    } 
    else
    { 
        header('Location: adminview.php');
    } 

}
?> 