<html>
<head>
<title> PHP MULTIPLE MATRIX </title>
</head>
<body>
<center>
<?php  $a =array 
(
array(1,0,8),
array(0,2,1),
array(1,3,2)
);
$b = array
(
array (1,0,1),
array(2,3,1),
array (1,4,0)
);
$rows = count($a[0]);
$cols  = count ($b[0]);$m = count($b);
if (count($a[0]) !=$m)
{
	echo "incompletable matrix";
	exit(0);
}
for ($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
	$mul[$i][$j] = 0;
	for($k=0; $k<$m; $k++)
{
	$mul[$i][$j] += $a[$i][$j] * $b[$i][$j];
}
}
}
echo("multiplications of two matrices:</br>");
for ($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
echo($mul[$i][$j] . "");
echo " ";
}
echo("</br>");
}
?>
</center>
</body>
</html>

