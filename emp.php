<HTML>
<BODY>
<H1>PROGRAM TO READ THE EMPLOYEE DETAILS</H1>
<form action="slip15.php" method="get">
<table border="0" align="center">
<tr>
<td>Emp Name</td><td><Input type="text" name="ename"></td>
</tr>
<tr><td>Designation</td><td><Input type="text" name="des"></td></tr>
<tr><td>Department</td>
<td><select name="dep">
<option value="admin">admin</option>
<option value="store">store</option>
<option value="manager">manager</option>
</select>
</td></tr>
<tr>
<td>Gender</td>
<td><Input type="Radio" name="gen" value="Female">Female
<input type="Radio" name="gen" value="Male">Male
</td></tr>
<tr><td>Salary</td>
<td><Input type="text" name="esal"></td></tr>
<tr>
<td><input type="submit" value="SUBMIT"></td>
<td><input type="reset" value="RESET"></td>
</tr>

<?php
$ename=get('ename');
$designation=get('des');
$department=get('dep');
$gender=get('gen');
$salary=get('esal');
echo "ename ".$name." ";
echo "designation ".$designation." ";
echo "department ".$department." ";
echo "gender" .$gender." ";
echo "Salary ".$salary." ";
?>
</form>
</body>
</html>
