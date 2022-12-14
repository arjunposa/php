<html>
<body>
<?php
 include ('submit.php');
 if(isset($_GET['submit']))
 {
 	$sats=$_GET['txtsats']; 
 	$phy=$_GET['txtphy'];
 	$mth=$_GET['txtmth'];
 	$com=$_GET['txtcom'];
 	$eng=$_GET['txteng'];
 	$obtmarks=$sats+$phy+$mth+$com+$eng;  
 	echo $obtmarks;
 	$totalmarks=500;
 	$grade=($obtmarks/$totalmarks)*100;
 	if ($grade>=90)
 	 {
 		$output= "Grade A";
 	}
 	else if($grade>=80)
 	{
 		$output= "Grade B";
 	}
 	else if($grade>=60 )
 	{
 		$output= "Grade C";
 	}
 	else if($grade>=50)
 	{
 		$output= "Grade D";

 	}
 	else if ($grade>=40)
 	 {
 	$output= "Grade E";
 	}
 	else if  ($grade>=30)
 	{
 		$output= "Fail";
 	}
 
?>

<table border="1" width="70">
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
		 <td> echo $sats;</td>
		 <tr>
		 <td>Physics</td>
		 <td> echo $phy;</td>
		</tr>
		<tr>
		 <td>Math</td>
		 <td> echo $mth;</td></tr>
		 <tr>
		 <td>computers</td>
		 <td> echo $com;</td>
		</tr>
		<tr>
		 <td>English</td>
		 <td>echo $eng;</td>
	</tr>
	<tr>
		<td>Obtain Marks</td>
		<td> echo $obtmarks; </td>
	</tr>
	<tr>
		<td>Grade</td>
		<td>  echo $output;</td>
	</tr>
</table></body>
</html>