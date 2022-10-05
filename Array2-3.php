<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php

$elements = array(25,47,42,56,32);

$odd = array();
$even = array();
foreach ($elements as $val);
$size = count($elements);
for ($i = 0; $i < $size; $i++) {
    echo "$elements[$i] ";
}
$x = 0;
$y = 0;
for ($i = 0; $i < $size; $i++) {
    if ($elements[$i] % 2 == 0) {
        $even[$x] = $elements[$i];
        $x++;
    } else {
        $odd[$y] = $elements[$i];
        $y++;
    }
}
echo "<br> Array of even numbers : <br>";
for ($i = 0; $i <= $x; $i++) {
    echo "$even[$i] ";
}
echo "\nArray of odd numbers : <br>";
for ($i = 0; $i <= $y; $i++) {
    echo "$odd[$i] ";
}
?>

</body>
</html>