<html>
<body>
<?php
session_start();
$eno = $_GET['eno'];
$enm = $_GET['enm'];
$eadd = $_GET['eadd'];
echo "<h3>Employee Details</h3> ";
echo "Emp No.: ".$_GET['eno']."<br>";
echo "Name : ".$_GET['enm']."<br>";
echo "Adress : ".$_GET['eadd']."<br>";
?>
</body>
</html>