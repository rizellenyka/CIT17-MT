<!DOCTYPE >
 
<html >
<head>

<title>Exercise 7</title>
</head>
 
<body>
<h2>Nested Loop Multiplication Table</h2>
 
<?php

echo "<table border=\"1\">";
 
for ($row=1; $row<=7; $row++){
  echo "<tr>\n";
 
  for ($col=1; $col<=7; $col++){
   
    $x=$col * $row;
     
    echo "<td>$x</td>\n";
  }
  echo "</tr>";
}
echo "</table>";
?>
 
</body>
</html>