<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    
    , initial-scale=1.0">
    <title>Weather Conditions</title>
</head>
<body>

    <?php 

    print "<h2> Weather Conditions </h2>";
 


    $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
    for($i = 0; $i < count($weather); $i++){
        print($weather[$i]);
        print("<br>");
    }
    
    ?>

    <?php 
    print("<br>");

    echo "We've seen all kinds of weather this month. At the beginning of the month, we had ".
    $weather[5] . " and " . $weather[6] .".". "<br>" . "Then comes ". $weather[1] . " with a few ". $weather[2] . 
    " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4];
    
    
    ?>
    
</body>
</html>