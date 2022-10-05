<!DOCTYPE html>
<html>
<head>

	<title>Array2</title>
</head>
<body>
<?php

$elements = array(5, 1, 1);	


$unique = array_unique($elements);
$duplicate = array_diff_assoc($elements, $unique);

foreach($duplicate as $val){

print_r('Total number of duplicate elements found in the array is :'.($val));

}
?>

</body>
</html>