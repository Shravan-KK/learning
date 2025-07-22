<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>Double and Single Quotes</h2>
    <?php
    $x="John";
    echo "Hello $x";
    echo 'Hello $x';
    ?>
    <h2>Strlen</h2>
    <?php
    echo strlen("Hello world!");
    ?>
    <h2>Str_word_count</h2>
    <?php
    echo str_word_count("Hello world!");
    ?>
    <h2>Strrev</h2>
    <?php
    echo strrev("Hello world!");
    ?>
    <h2>Strpos</h2>
    <?php
    echo strpos("Hello world!","world" );
    ?>
    <h2>Strreplace</h2>
    <?php
    echo str_replace("world","Dolly","Hello world");
    ?>
    <h2>String functions</h2>
    <h4>Uppercase</h4>
    <?php
    $y='Hello World';
    echo strtoupper($y);
    ?>
    <h4>Lowercase</h4>
    <?php
    echo strtolower($y);
    ?>
    <h4>Replace String</h4>
    <?php
    echo str_replace('World','everybody',$y);
    ?>
    <h4>Removing Whitespaces</h4>
    <?php
    echo trim($y) ;
    echo "<br>Whitespaces are invisible in plain html";
    ?>
    <h4>String into an array</h4>
    <?php
    $z=explode(' ',$y);
    print_r($y);
    ?>
    <h2>String Concatenation</h2>
    <?php
    $a="John";
    $b="Wick";
    $c=$a . $b;
    echo $c."<br>";
    $d=$a." ".$b;
    echo $d."<br>";
    $e="$a $b";
    echo $e;
    ?>
    <h2>Slicing Strings</h4>
    <?php
    echo substr($y,6,5);
    echo substr($y,5,-3);
    ?>
    <h2>Escape characters</h2>
    <?php
    echo 'We are the so called "Vikings" from the north';
    echo "<br>We are the so called \"Vikings\" from the north";
    ?>
</body>
</html>