<?php 
 $pdo=new PDO('mysql:host=localhost;port=3306;dbname=exam_allot','root' );
 $con=mysqli_connect("localhost","root","","exam_allot");
$pdo->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
?>
