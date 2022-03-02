<html>
<body bgcolor="orange">
<?php
$name=["arjun","bai","athul","unni","raju"];

echo "players";
echo "<br><br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<4;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl </th><th>$name[$i]</th></tr>";
}
echo " </table>"
?>
</body>
</html>

