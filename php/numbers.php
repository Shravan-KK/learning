<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>PHP INTEGERS</h2>
    <?php
    $x = 5985;
    var_dump(is_int($x));
    echo "<br>";
    $x = 59.85;
    var_dump(is_int($x));
    echo "<br>";
    ?>
    <h2>PHP FLOATS</h2>
    <?php
    $x = 10.365;
    var_dump(is_float($x));
    echo "<br>";
    ?> 
    <h2>PHP INFINITY</h2>
    <?php
    $x = 1.9e411;
    var_dump(is_finite($x));
    echo "<br>";
    ?> 
    <h2>PHP NAN</h2>
    <?php
    $x = acos(8);
    var_dump(is_nan($x));
    ?>
    <h2>PHP NUMERICAL STRINGS</h2>
    <?php
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br>";
    ?>
    <h2>PHP CASTING</h2>
    <?php
    //Cast float to integer
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";

    //Cast string to integer
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    ?>
    
</body>
</html>