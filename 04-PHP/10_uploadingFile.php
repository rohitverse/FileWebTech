<!DOCTYPE html>
<html>
<head>
    <title>PHP-@rohitverse</title>
</head>
<body>
    <h2>Uploading Files in PHP</h2>
    <?php
    if ($_FILES["file"]["error"]>0) {
        echo "Error: ".$_FILES["file"]["error"]."<br>";
    }else{
        echo "Upload: ".$_FILES["file"]["name"]."<br>";
        echo "Type: ".$_FILES["file"]["type"]."<br>";
        echo "Size: ".$_FILES["file"]["size"]."<br>";
        echo "Stored in: ".$_FILES["file"]["tmp_name"];
    }
    ?>
</body>
<!-- https://github.com/rohitverse -->
</html>



