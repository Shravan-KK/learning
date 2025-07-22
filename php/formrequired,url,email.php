<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php $nameerr = $emailerr = $websiteerr = $commenterr = $gendererr = "";
    $name = $email = $website = $comment = $gender = "";?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class = "error">*<?php echo $nameerr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class = "error">*<?php echo $emailerr;?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class = "error">*<?php echo $websiteerr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class = "error">*<?php echo $gendererr;?></span>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    if($_SERVER['REQUEST_METHOD']=="POST") {
        if(empty($_POST["email"])) {
            $emailerr  = "Email is required";
        }  else {
            $email = test_input($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailerr = "Not a valid email format";
            }

          }
        if(empty($_POST["name"])) {
            $nameerr = "Name is required";
        }  else {
            $name = test_input($_POST["name"]);
            if(!preg_match( "/^[a-zA-Z-' ]*$/",$name)) {
                $nameerr = "Only letters and white space allowed";
            }
           }
        if(empty($_POST["website"])) {
            $websiteerr = "Website is required";
        } else {
            $website = test_input($_POST["website"]);
            if(!filter_var($website,FILTER_VALIDATE_URL)) {
                $websiteerr = "Invalid URL format";
            }
           }
        if(empty($_POST["gender"])) {
            $gendererr = "gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
           }
        }
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>
</body>
</html>