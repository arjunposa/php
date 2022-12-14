<html>
<head>
<title> student marks list</title>
</head>
<body>
<h1>Student Marks List</h1>
<form method="get">
	<ul>
		<li><input type="text" name="txtsats" placeholder="statistics"></li>
		<li><input type="text" name="txtphy" placeholder="physics"></li>
		<li><input type="text" name="txtmth" placeholder="Maths"></li>
		<li><input type="text" name="txtcom" placeholder="computers"></li>
		<li><input type="text" name="txteng" placeholder="English "></li>
		<li><input type="Submit" name="submit" value="grade"></li>
		</ul>
		</form>
<?php
  if(isset($_GET['submit']))
 {
 	$sats=$_GET['txtsats']; 
 	$phy=$_GET['txtphy'];
 	$mth=$_GET['txtmth'];
 	$com=$_GET['txtcom'];
 	$eng=$_GET['txteng'];
	if($sats=="")
	{ 
   echo "<script> alert ('please enter satistics marks')</script>";
}
	$obtmarks=$sats+$phy+$mth+$com+$eng;  
  	$totalmarks=500;
 	$grade=($obtmarks/$totalmarks)*100;
	if($grade>=90)
 	 {
 		 $out="Grade A";
 	}
 	else if($grade>75)
 	{
 		$out= "Grade B";
 	}
 	else if($grade>=65)
 	{
 		$out= "Grade C";
 	}
 	else if($grade>=45)
 	{
 		$out= "Grade D";

 	}
 	else 
	{
		$out= "Fail";
	}
  ?>
  <table border="1" width="60%">
	<tr>
		<tr>
			<th>
				Subjects
			</th>
			<th>
				Marks
			</th>
			<tr>
		 <td>Satistics</td>
		 <td><?php echo $sats; ?></td>
		 <tr>
		 <td>Physics</td>
		 <td> <?php echo $phy; ?></td>
		</tr>
		<tr>
		 <td>Math</td>
		 <td> <?php echo $mth; ?></td></tr>
		 <tr>
		 <td>computers</td>
		 <td><?php echo $com;?></td>
		</tr>
		<tr>
		 <td>English</td>
		 <td><?php echo $eng; ?></td>
	</tr>
	<tr>
		<td>Obtain Marks</td>
		<td><strong> <?php echo $obtmarks;?> </strong></td>
	</tr>
	<tr>
		<td>Grade</td>
		<td> <strong><?php echo $out; ?></strong></td>
	</tr>
	</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>
 