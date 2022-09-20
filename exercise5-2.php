<!DOCTYPE html PUBLIC>
 
<html>
<head>

<title>Exercise5.2</title>
</head>
 
<body>
<h2>If-Else Statement</h2>
 
<?php
$currMonth=date('F', time());
if ($currMonth == 'August'){
  echo "<p>It's August, so it's really hot.</p>";
}else{
  echo "<p>Not August, so at least not in the peak of the heat.</p>";
}
?>
 
</body>
</html>