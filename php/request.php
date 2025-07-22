<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name:<input type="text" name="fname">
        <input type="submit" value="Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST") {
            $_name= htmlspecialchars($_REQUEST["fname"]);
            if(empty($_name)) {
                echo "Name is empty";
            } else {
                echo "Hello $_name";
            }
        }
    ?>
    <a href = "servers.php?subject=PHP&web=shravan"
</body>
</html>