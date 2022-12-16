<?php
include("../pdo.php");
$room_no=$_POST["room_no"];
$query="DELETE FROM roomdetails WHERE name='$room_no';";
$dummy_eliminate = "DELETE FROM roomdetails WHERE row=0 AND colmn=0;";
$result=mysqli_query($con, $query);
$result=mysqli_query($con, $dummy_eliminate);
header("Location: roomdetail.php");
?>