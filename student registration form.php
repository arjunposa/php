<html>
<head> 
   <title> registration  form </title>
</head>
<body>
<form action="reg.php" method="POST" >
<table border="5" bgcolor="#abfgrs" align="center">
<td>
<h1>STUDENT REGISTRATION FORM</h1>
</td>
<tr>
<td>STUDENTNUMBER
<input type="text" placeholder="Enter your Id.." name="sno"><tr>
<td>STUDENT NAME
<input type="text" placeholder="Enter your name.." name="sname"><tr>
<td>STUDENT CLASS
<select name="studentclass">
<option value="BSC">BSC
<option value="BCA">BCA
<option value="MCA">MCA
</select>
<tr>
<td>GENDER
<input type="radio" name="gender" value="M">MALE
<input type="radio" name="gender" value="F">FEMALE

<tr>
<td>Address<textarea  name="txtadrs"  rows="5" cols="40"></textarea></td>
<tr>
<td>AREA OF INTERESTS
<input type="checkbox" name="interests[]" value="cricket">cricket
<input type="checkbox" name="interests[]" value="football">foot ball
<input type="checkbox" name="interests[]" value="volleyball">volley ball
<input type="checkbox" name="interests[]" value="volleyball">chess
<input type="checkbox" name="interests[]" value="volleyball">dancne
<tr>
<td><input type="submit" VALUE="SUBMIT" >
</td></table>
</form>
</body>
</html>