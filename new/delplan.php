<?php
include("../pdo.php");
$titlename=$_POST["titlename"];
$query="DELETE FROM title WHERE title='$titlename';";
$dummy_eliminate = "DELETE FROM title WHERE title=0 AND date=0;";
$result=mysqli_query($con, $query);
$result=mysqli_query($con, $dummy_eliminate);
header("Location: output.php");
?>