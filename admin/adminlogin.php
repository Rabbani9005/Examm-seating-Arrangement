<?php 
   $pdo=new PDO('mysql:host=localhost;port=3306;dbname=exam_allot','root' );
   $pdo->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
 try{  if(isset($_POST['ac']) && isset($_POST['pw'])){
     session_start();
    $stmt=$pdo->query("select * from admins");
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
      if($row['aname']==$_POST['ac'] && $row['apass']==$_POST['pw'] ){
        $_SESSION['name']=$row['aname'];
      }
      
 }


if($_SESSION['name']==$_POST['ac'])
{
  $_POST=array();
  header("Location: ../new/roomdetail.php");
}
}
 }catch(Exception $e)
  {
      echo "Internal Error Contact Admin";
      error_log("aindex.php,SQL error=".$e->getMessage());
  }

?>

<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <h1 style="padding-top:30px;font-size: 30px"; style="color:white;">Examination Hall and Seating Arrangement</h1>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Admin Login</h1>
            <form name="form1" class="box" method="post">
            <p>Username</p>
            <input type="text" name="ac" placeholder="id" id="ac" autocomplete="off" required>
            <p>Password</p>
            <input type="password" name="pw" placeholder="Passsword" id="pw" autocomplete="off" required>
            <input type="submit" name="submit" value="Login">   
            </form>
        
        
        </div>
    
    </body>
</html>