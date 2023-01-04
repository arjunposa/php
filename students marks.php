<html>
<head>
<title> students marks list </title>
</head>
<body>
<h1> STUDENTS MARKS LIST </h1>
<form method="get">
<ul>
<li><input type="text" name="txtstas" placeholder="statistics"></li>
<li><input type="text" name="txtphy" placeholder="physics"></li>
<li><input type="text" name="txtmth" placeholder="mathematics"></li>
<li><input type="text" name="txtcom" placeholder="computer"></li>
<li><input type="text" name="txteng" placeholder="english"></li>
<li><input type="submit" name="submit" value="grade"></li>
</ul>
</form>
<?php
if(isset($_GET['submit']))
{
	$stas=$_GET['txtstas'];
	$phy=$_GET['txtphy'];
	$mth=$_GET['txtmth'];
	$com=$_GET['txtcom'];
	$eng=$_GET['txteng'];
	if($stas=="")
	{
		echo "<script> alert ('please enter the statistics marks') </script>";
	}if($phy=="")
	{
		echo "<script> alert ('please enter the physics marks') </script>";
	} else if($mth=="")
	{
		echo "<script> alert ('please enter the mathematics marks') </script>";
	}else if($com=="")
	{
		echo "<script> alert ('please enter the computer marks') </script>";
	}else if($eng=="")
	{
		echo "<script> alert ('please enter the english marks') </script>";
	}
	$obtmarks=$stas+$phy+$mth+$com+$eng;
	$totalmarks=500;
	$grade=($obtmarks/$totalmarks)*100;
	if($grade>=90)
	{
		$out="GRADE A";
	}
	else if ($grade>=75)
	{
		$out="GRADE B";
	}
	else if ($grade>=65)
	{
		$out="GRADE C";
	}
	else if ($grade>=55)
	{
		$out="GRADE D";
	}
	else if($grade>=45)
	{
		$out="GRADE D";
	}
     else 
	 {
		 $out="FAIL";
	 }
}

?>
<table border="1" width="100%">
<tr>
<tr>
<th> SUBJECTS </th>
<th> MARKS </th>

<tr>
<td> statistics </td>
<td><?php echo $stas;?></td>
</tr>
<tr>
<td> mathematics </td>
<td><?php echo $mth;?></td>
</tr>
<tr>
<td> computer </td>
<td><?php echo $com;?></td>
</tr>
<tr>
<td> physics </td>
<td><?php echo $phy;?></td>
</tr>
<tr>
<td> english </td>
<td><?php echo $eng;?></td>
</tr>
<tr>
<td>obtain marks </td>
<td><strong><?php echo $obtmarks;?></strong></td>
</tr>
<tr>
<td>grade</td>
<td><strong><?php echo $out;?></strong></td>
</tr>
</tr>
<?php 
?>
</table>


</body>
</html>






