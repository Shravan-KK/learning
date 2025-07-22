<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Creating Constants using define function</h2>
    <?php
    define("Greetings",'Welcome to Shravan\'s website');
    echo Greetings;
    ?>
    <h2>Creating constants using keyword</h2>
    <?php
    const Greeting = 'Welcome to Shavan\'s website';
    echo Greeting ;
    ?>
    <h2>Creating an array constant</h2>
    <?php
    define("cars",["Volvo","Benz","BMW","Audi"]);
    echo cars[2];
    ?>

</body>
</html>