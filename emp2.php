<html>
<head><title>Fill Employee Details</title>
<body>
<h2>Enter Information for 5 Employees (Use space for separation)</h2>
<form action="employee.php" method="">
Enter Employee Nos: 
<input name="nos" type="text" /><br />
Enter Employee names: 
<input name="names" type="text" /><br />
Enter respective salaries:
<input name="sal" type="text" /><br />
Enter designations:
<input name="des" type="text" /><br /><br />
<input type="submit" /><input type="reset" /><br />
</form>
</body>
</head></html>
eno = $eno;
     $this-&gt;name = $name;
     $this-&gt;sal = $sal;
     $this-&gt;des = $des;
   }

   public function display data()
   {
     echo "Employee no is $eno <br />";
     echo "Employee name is $name <br />";
     echo "Employee salary is $sal <br />";
     echo "Employee designation is $des <br />";
   }
}

$emp_info_array[] = new Employee();


for($i = 0; $i &lt; 5; $i++)
{
   $emp_info_array[$i] = new Employee();
   $emp_info_arrays[$i]-&gt;
   acceptData($enos[$i], $names[$i], $salaries[$i],$des[$i]);
   $emp_info_array[$i].displayData();
}
?&gt;