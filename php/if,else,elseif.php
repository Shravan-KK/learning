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
    ?>

</body>
</html>