<html>
<body  bgcolor="#abfgrs" align="center">
<?php
session_start();
$stnum=$_POST['sno'];
echo "STUDENT REGISTERED NUMBER:  ".$stnum;
$sname=$_POST['sname'];
echo "<br>";
echo "STUDENT NAME: ".$sname;
$sclass=$_POST['studentclass'];
echo "<br>"; 
echo "STUDENT CLASS: ".$sclass;
$gen=$_POST['gender'];
echo "<br>";
echo"GENDER:  ".$gen;
$address=$_POST['txtadrs'];
echo "<br>"; 
echo "ADDRESS:  ".$address;
$intr=$_POST['interests'];
echo "<br>"; 
echo " STUDENT INTERESTED AREAS:";
foreach($intr as $chk1)
{
echo "<br>".$chk1;
}

?>
</body>
</html>