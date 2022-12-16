<?php
include("../pdo.php");
$branchname=$_POST["branchname"];
$query="DELETE FROM students WHERE branch='$branchname';";
$dummy_eliminate = "DELETE FROM students WHERE row=0 AND colmn=0;";
$result=mysqli_query($con, $query);

header("Location: update.php");
?>