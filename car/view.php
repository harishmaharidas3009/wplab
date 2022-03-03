<?php
include "config.php";
$sql = " SELECT * FROM `cars` " ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>Online Car Users</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Mobile</th>
<th>Car Model</th>
<th>Car Price</th>
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
<td><?php echo $row['address'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['car_model'];?></td>
<td><?php echo $row['car_price'];?></td></tr>
<?php
	}
}
?>
</table>
</html>