<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"anand");
$sql="SELECT * FROM emp WHERE salary>='$_POST[salary]'";
$result=mysqli_query($con,$sql);
echo "<table border='1'>
<tr>
<th>EMPID</th>
<th>MOBILE</th>
<th>SALARY</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr><td>" . $row['eid'] . "</td>";
echo "<td>" . $row['mob'] . "</td>";
echo "<td>" . $row['salary'] . "</td></tr>";
}
echo "</table>";
mysqli_close($con);
?>
