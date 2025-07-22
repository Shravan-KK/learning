<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $favcolor = "red";

    switch ($favcolor) {
        case "red";
        echo "Your favourite color is red!";
        echo "<br>";
        break;
        case "blue";
        echo "Your favourite color is blue";
        break;
        case "green";
        echo "Your favourute color is green";
        break;
        default:
        echo "Your favourite color is neither red,blue,nor green"; 
    }
    switch ($favcolor) {
        case "red";
        echo "Your favourite color is red!";
        echo "<br>";
        case "blue";
        echo "Your favourite color is blue";
        echo "<br>";
        case "green";
        echo "Your favourute color is green";
        echo "<br>";
        default:
        echo "Your favourite color is neither red,blue,nor green";
        echo "<br>";
    }
    $d=4;
    switch ($d) {
        default:
            echo "looking forward to the weekend";
            break;
        case 6:
            echo "Today is saturday";
            break;
        case 0:
            echo "Today is sunday";
            break;
    }
    $e=3;
    switch ($e) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "This week feels so long";
            break;
        case 6:
        case 0:
            echo "Weekends are the best";
            break;
        default:
            echo "Something went wrong, please try again later."; 
    }
    ?>
    
</body>
</html>