<!DOCTYPE html>
<html>
<head>
    <title>PHP-@rohitverse</title>
</head>
<body>
    <?php
    echo "Welcome to the stage where we are ready to get connected to a database <br>";
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        echo "Connection was successful";
    }
    ?>
</body>
<!-- https://github.com/rohitverse -->
</html>