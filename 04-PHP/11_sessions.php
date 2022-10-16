<!DOCTYPE html>
<html>
<head>
    <title>PHP-@rohitverse</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['username'] = "Rohit";
    $_SESSION['favCat'] = "Books";
    echo "We have saved your session"; 
    ?>
</body>
<!-- https://github.com/rohitverse -->
</html>

<!-- bool session_start ( void )   -->