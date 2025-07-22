<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $t = date("H");
    echo $t;
    echo "<br>";
    
    if ($t < "20") {
       echo  "Have a good day!"; 
    }
    echo "<br>";
    $t = date("H");
    echo $t;
    echo "<br>";
    if ($t < "20") {
        echo "Have a good day!";
    }
    else {
        echo "Have a good night!";
    }
    echo "<br>";
    $t = date("H");
    echo $t;
    echo "<br>";
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t <"20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<br>";
    $a=200;
    $b=33;
    $c=500;
    if ($a>$b and $a<$c){
        echo "Both conditions are true";
    }
    echo "<br>";
    echo "Short Hand If:";
    if ($a<300) $d="Hello";
    echo $d;
    echo "<br>";
    $f=$a<$b?"Hello":"Good bye";
    echo $f;
    echo "<br>";
    echo "Nested if";
    if ($b>30){
        echo "Above 30";
        if ($b>40){
            echo "Above 40";
        } else {
            echo "But not above 40";
        }
    }
    ?>

</body>
</html>