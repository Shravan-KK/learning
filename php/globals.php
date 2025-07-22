<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=75;
    function myfunction() {
        echo $GLOBALS['x'];
        echo "<br>";
    }
    myfunction();
    $y=100;
    function myfunc() {
        global $y;
        echo $y;
        echo "<br>";
    }
    myfunc();
    myfunc2() {
        $GLOBALS["z"] = 200;
        echo "<br>";
    }
    myfunc2();
    echo $z;
    ?>
</body>
</html>