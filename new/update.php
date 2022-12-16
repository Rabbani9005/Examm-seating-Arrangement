<?php
include("../pdo.php");

?>

<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>UPLOAD STUDENT DATA</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />


<style type="text/css">
	.row, form{
		border: 2px solid white;
		width: 100%;
		display: flex;
	}
	form{
		justify-content: space-between;
	}
	form input{
		padding: 10px;
		color: black;
	}
	::placeholder{
		color: black;
	}
	#submit{
		padding: 10px;
		color: black;
		width: 100px;
		font-size: 18px;
	}


/************************************* editted ***********************************/

	  table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
		        font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: solid black;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            color: #006600;
        }
 
        td {
            font-weight: lighter;
        }


</style>


</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Seating Arrangement <span></span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 
						<li class="hvr-sweep-to-bottom"><a href="roomdetail.php">Room Arrangement</a></li>
						<li class="hvr-sweep-to-bottom"><a href="update.php" class="scroll">ADD STUDENT</a></li>
						<li class="hvr-sweep-to-bottom"><a href="output.php" class="scroll">SHUFFLE</a></li>
						<li class="hvr-sweep-to-bottom"><a href="../admin/home.html" class="scroll">Logout</a></li>
						
					  --></ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>


<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1 style="color:white;">UPLOAD STUDENT DATA</h1>
		<h2>Exam Seating Arrangement</h2>
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">

  	<div class="row">
  		<form method="POST" action="suffle.php" enctype="multipart/form-data">
  			<div>
  				<label for="branch">Branch Name:</label>
  				<input type="text" name="branch" placeholder="Enter branch" required>
  			</div>
<!-- <div class="row"> -->
  		<form method="POST" action="suffle.php" enctype="multipart/form-data">
  			<div>
  				<label for="branch">categeory</label>
  				<input type="text" name="catg" placeholder="A OR B" required>
  			</div>
  			<div>
  				<!-- <label for="file">Upload File:</label> -->
  				<input size="50" type="file" name="sd" required>
  			</div>

  			<div>
  				<button id="submit">Submit</button>

  			</div>

  		</form>


  	</div>
  </div>
</div>
 
  	<!-- HTML code to display data in tabular format -->

    <section>
        <h1 style="color:white;">CLASS INFO</h1>
        <!-- TABLE CONSTRUCTION -->
		<table>
            <tr bgcolor="#decf00">
                
                <th>BRANCH</th>
             
                <th>ACTION</th>
            </tr>
		<?php	
		$query="SELECT distinct branch FROM students";
		$result=mysqli_query($con,$query);
		while($row=$result->fetch_assoc())
		{
			?>
			<tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                
                <td bgcolor="#decf00"><?php echo $row['branch'];?></td>
               
                <td bgcolor="#decf00">
                	<form action="delstu.php" method="POST">
                		<input style="position: relative;" type="text" name="branchname" value="<?php echo $row['branch'];?>">
                		<button class="btn btn-default btn-info">Delete</button>
                	</form>
                </td>
            </tr>

<?php
		}
		?>
	</div>
 
	<!--//forms-->
	</div>
</div>
</div>
<div>
 <div> 
<?php
     $query="SELECT count(sno) as count1 FROM students";
     $result=mysqli_query($con,$query);
     $temp=$result->fetch_assoc();
     ?><?php echo "Total students ". $temp['count1']; ?>
         </br>
     <?php
 ?>

	</div>
		<div> 
<?php
     $query="SELECT count(name) as count1 FROM roomdetails";
     $result=mysqli_query($con,$query);
     $temp=$result->fetch_assoc();
     ?><?php echo "Total strenghts ". $temp['count1']*30; ?>
         <br/>
        <?php echo "Total clases ". $temp['count1']; ?>
     <?php
 ?>

	</div>

<!--short codes end here--></div></div>

</body>
</html>