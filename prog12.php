<?php
$arr=["arjun","bai","athul","unni","raju"];
$t=$arr;
echo "players";
echo "<br><br>";
echo "display using print-r() <br>";
print_r($t);
echo "<br> <br>";
echo "sorting using asort() <br>";
asort($t);
print_r($t);
echo "<br> <br>";
echo "sorting using arsort()<br>";
arsort($t);
print_r($t);
?>
