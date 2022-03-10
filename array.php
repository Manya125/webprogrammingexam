<html>
<body>
<?php

$student=array('zera','anu','rahul','babu','shalu','abhi');
echo ("orginal array  :  ");
print_r($student);
echo "<br>";
echo "<br>";
echo("Array in ascending order  :  ");
asort($student);
print_r($student);
echo "<br>";
echo "<br>";
echo ("Array in descending order  :  ");
arsort($student);
print_r($student);

?>
</html>