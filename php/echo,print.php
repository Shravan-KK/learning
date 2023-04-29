<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>Echo</h2>
    <h2>Display text</h2>
    <?php
    echo "<h2>Php is fun!</h2>";
    echo "Hello world<br>";
    echo "I am about to learn PHP!<br>";
    echo "This", "string", "was","made","with multiple parameters.";
    ?>
    <h2>Display Variables</h2>
    <?php
    $txt1  = "Learn PHP";
    $txt2  = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at" . $txt2 . "<br>";
    echo $x + $y;
    ?>
    <h2>Print</h2>
    <?php
    print "<h2>PHP is fun!</h2>";
    print "Hello world<br>";
    echo "I am about to learn PHP";
    ?>
    <h2>Display varialbles</h2>
    <?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;
     
    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at" . $txt2 . "<br>";
    print $x + $y;
    ?>

    
</body>
</html>