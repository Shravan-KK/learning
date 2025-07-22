<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>The pi function</h2>
    <?php
    echo (pi());
    echo "<br>";?>
    <h2>Max and Min functions</h2>
    <?php
    echo (max(0,150,30,20,-8,-200));
    echo "<br>";
    echo (min(0,150,30,20,-8,-200));
    echo "<br>";?>
    <h2>Absolute function</h2>
    <?php
    echo (abs(-6.7));
    echo "<br>";?>
    <h2>Square root function</h2>
    <?php
    echo sqrt(64);
    echo"<br>";
    ?>
    <h2>Round function</h2>
    <?php
    echo (round(0.8));
    echo (round(86.57));?>  
    <h2>Random numbers</h2>
    <?php
    echo (rand()) ."<br>;
    echo (rand(10,20));
    ?>
    
</body>
</html>