<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
print "<h2>Largest Cities </h2>";

$LargeCities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", 
"Buenos Aires", "Cairo", "London");

for($i = 0; $i < count($LargeCities); $i++){
    print ($LargeCities[$i]) . ", ";

}
?>

<ul> 

    <?php 
    for($i = 0; $i < count($LargeCities); $i++){
        print "<li> $LargeCities[$i] </li>";
       
    }
    ?>

</ul>

<?php 
array_push($LargeCities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

    for($i = 0; $i < count($LargeCities); $i++){
        print "<li> $LargeCities[$i]  </li>";
       
    }
    ?>






    
</body>
</html>