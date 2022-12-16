<?php
include("../pdo.php");
$handle = fopen($_FILES["sd"]["tmp_name"], "r");
$headers = fgetcsv($handle, 1000, ",");
$branch=$_POST["branch"];
$catg=$_POST["catg"];
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
{
	$slno=(int)$data[0];
	$query="INSERT INTO students VALUES('$slno','$data[1]','$data[2]','$branch','$catg');";
	$result=mysqli_query($con, $query);
}
fclose($handle);

echo $_FILES['sd']['tmp_name']." File uploaded Sucessfully";
 header("Refresh: 3; location:update.php");
 header("Location: update.php");
?>