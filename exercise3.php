<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Exercise 3</title>
</head>
<body>

<?php
$x = 8;
print "Value is now " . ($x) . "." . "<br>";
print " Add 2. Value is now " . ($x +=2) . "." . "<br>";
print " Subtract 4. Value is now " . ($x -=4) . "." . "<br>";
print " Multiply by 5. Value is now " . ($x *=5) . "." . "<br>";
print " Divide by 3. Value is now " . ($x /=3) . "." . "<br>";
print " Increment value by one. Value is now " . (++$x) . "." . "<br>";
print " Decrement value by one. Value is now " . (--$x) . "." . "<br>";

?>


</body>
</html>