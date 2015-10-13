<table border="1">

<?php
include "passwd.php";
$con=pg_connect("host=sbazy dbname=s181356 user=s181356 password=$pwd");
$s="select * from pracownicy";
$r=pg_exec($con,$s);
$lw=pg_numrows($r);
$lk=pg_numfields($r);

for ($i=0;$i<$lk;$i++)
 print "<th>".pg_field_name($r,$i);


for ($j=0; $j<$lw; $j++)
{
print "<tr>";
for ($i=0; $i<$lk; $i++) 
print "<td>".pg_result($r,$j,$i);
}
?>
</table>