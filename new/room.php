<?php
include("../pdo.php");
$row=(int)$_POST["row"];
$colmn=(int)$_POST["colmn"];
$r_name=$_POST['room_name'];
if ($row<>0 && $colmn<>0) {
	$query="INSERT INTO roomdetails VALUES('$r_name','$row','$colmn');";
	$result=mysqli_query($con, $query);
}
header("Location: roomdetail.php");
?>