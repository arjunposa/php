<?php
if ($_POST) {
    $rg = $_POST['txtreg'];
    echo $rg;
    $con = mysqli_connect("localhost","user","password","database");
    if ($con)
        echo "Successfully Connected.";
    $qry = "select * from result where regno=$rg";
    $result = mysqli_query($con, $qry);
    $nos = mysqli_num_rows($result);
    while ($row = mysqli_fetch_row($result)) {
        echo "<br>\n";
        echo "rollno: $row[0] name: $row[1] mark: $row[2] grade: $row[3]";
    }
}
?>