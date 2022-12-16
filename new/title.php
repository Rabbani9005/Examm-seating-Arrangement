<?php
include("../pdo.php");
$title=$_POST['title'];
$date=$_POST['date'];
if ($title<>0 && $date<>0) {
	$query="INSERT INTO title VALUES('$title','$date');";
	$result=mysqli_query($con, $query);
}
header("Location: output.php");
?>