<?php
include "connection.php";
$sql = " SELECT * FROM `userdata`" ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>view page</title>
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div class="container">
<h2>USERS</h2>
<table border="1"; align="center"; bgcolor="white">
<tr><th>Id</th>
<th>Name</th>
<th>Mobile</th>
<th>Address</th>
<th>DOB</th>
<th>Gender</th>
<th colspan=2>action</th>
</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['mobno'];?></td>
<td><?php echo $row['addr'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['gender'];?></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete this profile</a></td>
<td><a href="update.php?id=<?php echo $row['id'];?>">Update this profile</a></td></tr>
<?php
	}
}
?>
</table>
<center>
<br><br><br><br><br><br><font size="5"><a href="http://localhost/vote/homefinal.html">logout</font></a>
</center>
</body>
</html>