<?php
include("../pdo.php");
$query="SELECT * FROM roomdetails";
$result=mysqli_query($con,$query);
$query1="SELECT * from title";
$result1=mysqli_query($con,$query1);
$temp=$result1->fetch_assoc();
$query3="SELECT * FROM students WHERE catg='A'";
$agroup=mysqli_query($con,$query3);
$query4="SELECT * FROM students WHERE catg='B'";
$bgroup=mysqli_query($con,$query4);

$var1=array();
$cls1=array();
array_push($var1,'0');
array_push($cls1,'0');
while($row1=$agroup->fetch_assoc())
{
	array_push($var1,$row1['id']);
	array_push($cls1,$row1['class']);
}
$size1=sizeof($var1);
$var2=array();
$cls2=array();
array_push($var2,'0');
array_push($cls2,'0');

while($row2=$bgroup->fetch_assoc())
{
	array_push($var2,$row2['id']);
	array_push($cls2,$row2['class']);
}
$size2=sizeof($var2);
?>
<html>
<head>
<meta charset="UTF-8">
<title>RGUKTSKLM EXAM CELL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style type="text/css">
	table{
		border: 2px solid black;
		margin-bottom: 70px;
	}
	td,th{
		border: 2px solid black;
		height: 40px;
	}
	th{
		font-size: 20px;
	}
	.print-btn{
		font-size: 20px;
		padding: 5px 15px;
		margin-bottom: 5px;
		background-color: #cc3300;
		color: white;
	}
</style>
</head>
<body>
<div class="container" style="padding-top:50px">
<h1 align="center">RGUKT SKLM SEATING ARRANGEMENT </h1>
</div>
<div class="d-flex justify-content-end container">
	<button class="btn print-btn" onclick="window.print();return false;" style="cursor:pointer;">Print</button>
</div>
<div class="container">
	<?php  
				$i=1;
				$j=1;
				$k=0;
				$l=0;
				while($row=$result->fetch_assoc())
				{

					?>
	<table class="text-center col-12">
		<tr>
			<th colspan="8">RAJIV GANDHI UNIVERSITY OF KNOWELDGE AND TECHNOLOGIES-SRIKAKULAM</th>
		</tr>
		<tr>
			<td colspan="6" style="font-size: 22px;"><?php echo $temp['title'];?></td>
			<td colspan="2" style="font-size: 22px;"><?php echo $temp['date'];?></td>
		</tr>
		<tr>
			<td>ROW</td>
			<td>C-1</td>
			<td>C-2</td>
			<td>C-3</td>
			<td>CLASS</td>
			<td>C-4</td>
			<td>C-5</td>
			<td>C-6</td>
		</tr>
        <tr>
        	<td>COLMN </td>
        	<td colspan="3">LEFT SIDE</td>
        	<td style="font-size: 28px;"><?php echo $row['name']; ?></td>
        	<td colspan="3">RIGHT SIDE</td>
        </tr>
        <tr>
        	<td>R-1</td>
        	<td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td>&nbsp</td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>       	
        </tr>
        <tr>
        	<td>R-2</td>
        	<td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td>&nbsp</td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>  	
        </tr>
        <tr>
        	<td>R-3</td>
        	<td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td>&nbsp</td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>     
        </tr>
        <tr>
        	<td>R-4</td>
        	<td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td>&nbsp</td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>         	
        </tr>
        <tr>
        	<td>R-5</td>
        	<td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td>&nbsp</td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>
            <td><?php echo $var1[$i];?><br><?php echo $cls1[$i];$i++;if($i==$size1-1){$i=0;$k=1;}if($k==1){$i=0;}?></td>
            <td><?php echo $var2[$j];?><br><?php echo $cls2[$j];$j++;if($j==$size2-1){$j=0;$l=1;}if($l==1){$j=0;}?></td>       	
        </tr>
        <?php if($k==1 && $l==1){break;}?>
	</table>
<?php
				}
	?>
</div>
</body>
</html>