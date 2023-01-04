<!DOCTYPE html>
<html>
<body>
<center>
<?php
function add(){
	$numbers=func_get_args();
	$ttl=0;
	foreach($numbers as $num){
		$ttl=$ttl+$num;
	}
	return $ttl;
}
$total=add(10,15,20);
echo "total=$total";
echo "total=" .add(1,2,3,4,5)."";
?>
</center>
</body>
</html>