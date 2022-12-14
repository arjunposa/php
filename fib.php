<!DOCTYPE html>
<html>
<body>
 <?php
$num = 0;
$n1 = 0;
$n2 = 2;
echo "Fibonacci series with the first 2 numbers as 0 and 2 is: ";
echo "$n1, $n2"; 
while ($num < 10 )
{
$n3 = $n2 + $n1;
echo ", ";
echo "$n3";
$n1 = $n2;
$n2 = $n3;
$num = $num + 1;
}
?> </body>
</html>