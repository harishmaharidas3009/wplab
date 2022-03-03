<?php 

include "connection.php"; 
echo $_GET["id"];
if(isset($_GET['id']))
{

    $id = $_GET['id'];

    $sql1 = " DELETE FROM  `userdata` WHERE `id` = '$id' ";

     $result1 = $conn->query($sql1);

     if ($result1 == TRUE) 
     {

        die(header("location: http://localhost/vote/adminview.php"));

    }
    else
    {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
else {
    echo "<br>can't delete yet now";
}

?>