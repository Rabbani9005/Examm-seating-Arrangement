<?php
include("../pdo.php");

?>
<html>
<head><!--header files are added here-->
<title>Room Detail:: Seating Arragement</title>
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
<style>
.con{
	padding-top:8px;
	padding-left:100px;
	padding-right:150px;
	
	padding-bottom:1000px;
	height:550px;
    background-image:url(images/brown.png);
	background-position:center;
	background-repeat:repeat-y;
	
	width:100%;
	height:700px;
	color:white;

	background-attachment:scroll;
	
}

#result{
	width: 100%;
	height: auto;
	background-color: yellow;
}

/*=============================================== TABULAR==================================*/

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
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
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
				
					 --> </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1 style="color:white;">Room Detail</h1>
		<h2>Exam Seating Arrangement</h2>
      </div>
		<p class="grid1">
       
      </p>

		
    <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal" action="room.php" method="POST">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter Room Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="room_name" placeholder="name" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter  No. Of Rows</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="row" placeholder="rows" >
        </div>
      </div>
	 <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter No. Of Columns</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="colmn" placeholder="number of columns">
        </div>
      </div>
	 
      <div class="form-group">
        
		<div class="col-sm-offset-2 col-sm-10">
         <!--<input type="submit" value="SIGN UP"/><br> -->
		 <br><button type="submit" class="btn btn-default btn-info">Submit</button>
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
	<div> 
<?php
     $query="SELECT count(sno) as count1 FROM students";
     $result=mysqli_query($con,$query);
     $temp=$result->fetch_assoc();
     ?><?php echo "Total students ". $temp['count1']; ?>
         <br/>
     <?php
 ?>

    <div>
		<!-- HTML code to display data in tabular format -->
	
</div>
</form></div>
</div>
</div>

    <section>
        <h1 style="color:white;">CLASS INFO</h1>
        <!-- TABLE CONSTRUCTION -->
		<table>
            <tr bgcolor="#decf00">
                <th>NAME</th>
                <th>ROWS</th>
                <th>COLMN</th>
                <th>ACTION</th>
                
            </tr>
		<?php
		$query="SELECT * FROM roomdetails";
		$result=mysqli_query($con,$query);
		while($row=$result->fetch_assoc())
		{
			?>
			<tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['row'];?></td>
                <td><?php echo $row['colmn'];?></td>
                <td>
                	<form action="del.php" method="POST">
                		<input style="position: relative;visibility: hidden;" type="text" name="room_no" value="<?php echo $row['name'];?>">
                		<button>Delete</button>
                	</form>
                </td>
            </tr>


<?php
		}
		?>
	</div>
  </div>         
	   </form>

</div>


	</div>

</body>
</html>

