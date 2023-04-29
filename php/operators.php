<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>PHP ARITHMETIC OPERATORS</h2>
    <?php
    $x = 10;
    $y = 6;
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";
    ?>
    <h2>PHP ASSIGNMENT OPERATORS</h2>
    <?php
    $x = 20;
    $x+=100;
    echo $x;
    echo "<br>";
    $x = 50;
    $x-=30;
    echo $x;
    echo "<br>";
    $x =5;
    $x*=6;
    echo $x;
    echo "<br>";
    $x = 10;
    $x/=5;
    echo $x;
    echo "<br>";
    $x = 15;
    $x %=4;
    echo $x;
    echo "<br>";
    ?>
    <h2>PHP COMPARISON OPERATORS</h2>
    <?php
    $x = 100;
    $y = "100";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    echo "<br>";
    var_dump($x !== $y);
    echo "<br>";
    $x = 100;
    $y = 50;
    var_dump($x > $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    $x = 50;
    $y = 50;
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    $x = 5;
    $y = 10;
    var_dump($x <=> $y);
    echo "<br>";
    $x = 10;
    $y = 10;
    var_dump($x <=> $y);
    echo "<br>";
    $x = 15;
    $y = 10;
    var_dump($x <=> $y);
    echo "<br>"; 
    ?>
    <h2>PHP INCREMENT OPERATORS</h2>
    <?php
    $x=10;
    echo ++$x;
    
    echo "<br>";
    $x=10;
    echo $x++;
    echo "<br>";
    $x=10;
    echo --$x;
    echo "<br>";
    $x=10;
    echo $x--;
    echo "<br>"
    ?>
    <h2>LOGICAL OPERATORS</h2>
    <?php
    $x=100;
    $y=50;
    if ($x == 100 and $y == 50 ) {
        echo "Hello World";
    } 
    echo "<br>";
    $x = 100;
    $y = 50;
    if ($x == 100 && $y == 50) {
        echo "Hello world";
    }
    echo "<br>";
    $x = 100;
    $y = 50;
    if ($x == 100 or $y == 50) {
        echo "Hello world";
    }
    echo "<br>";
    $x = 100;
    $y = 50;
    if ($x == 100 || $y == 50) {
        echo "Hello world";
    }
    $x = 100;
    if ($x !== 90 ) {
        echo "Hello world";
    }
    ?>
    <h2>PHP STRING OERATORS</h2>
    <?php
    $txt1 = "Hello";
    $txt2 = " world";
    echo $txt1 . $txt2;
    $txt1 = "Hello";
    $txt2 = " world";
    $txt1 .= $txt2;
    echo $txt1 ;  
    ?>
    <h2>CONDITIONAL ASSIGNMENT OPERATORS</h2>
    <?php
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo "<br>";
    $user = "Renu"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    ?>  
</body>
</html>