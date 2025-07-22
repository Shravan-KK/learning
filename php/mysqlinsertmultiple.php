<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO MyGuests (firstname,lastname,email) VALUES ('Mary','Moe','Mary@example.com')";
    $sql .= "INSERT INTO MyGuests (firstname,lastname,email) VALUES ('Julie','Dooley','julie@example.com')";
    $sql .= "INSERT INTO MyGuests (firstname,lastname,email) VALUES ('Pawan','Kumar','pawan@example.com')";
    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    
</body>
</html>