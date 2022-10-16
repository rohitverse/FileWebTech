<!DOCTYPE html>
<html>
<head>
    <title>PHP-@rohitverse</title>
</head>
<body>
    <?php
    if (file_exists("mytestfile.txt")) {
        $file = fopen("mytestfile.txt", "r");
    } else {
        die("Error: The file does not exist.");
    }
    ?>
</body>
<!-- https://github.com/rohitverse -->
</html>
