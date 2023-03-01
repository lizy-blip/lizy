<!DOCTYPE html>
<html>
<body>
<?php

echo "Today is " . date("l");
echo "Today is " . date("d/m/y") . "<br>";
echo "Today is " . date("d.m.y") . "<br>";
echo "Today is " . date("d-m-y") . "<br>";
?>
<br/>
<hr>
<?php
 date_default_timezone_set("Asia/Kolkata");
 echo "The time is " . date("h:i:sa");
?>
<br/>
<hr>
&copy; 2010-<?php echo date("Y");?>
<?php
$t=mktime(14, 50, 00, 3, 1, 2023);
echo "Created date is " . date("d-m-y h:i:sa", $t);
?>
<br/>
<hr>
<?php
$d=strtotime("2.52pm March 1 2023");
echo "Created date is " . date("d-m-y h:i:sa", $d);
?>
</body>
</html>