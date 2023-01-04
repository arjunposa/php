<!DOCTYPE html>
<html>
<body>
<center>
    <?php
       function factorial($n){
	   if ($n < 2){
	   return 1;
	   }else {
	   return ($n *factorial($n-1));
	   }
	   }
       echo "factorial(5)=".factorial(5);
    ?>
</center>
</body>
</html>