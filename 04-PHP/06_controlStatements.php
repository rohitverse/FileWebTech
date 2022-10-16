<!DOCTYPE html>
<html>
<head>
    <title>PHP-@rohitverse</title>
</head>
<body>
    <h2>Control Flow Statements in PHP</h2>
    <?php
    echo "<h3> ElseIf Statement </h3>";
    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<h2> For Loop </h2>";
    for ($x = 0; $x <= 5; $x++) {
        echo "The number is: $x <br>";
    }
    ?>
</body>
<!-- https://github.com/rohitverse -->
</html>

<!-- 
Conditional/Selection statements
    If, Else, and Elseif Statements
    swtch Statement
Iteration/Loop statements
    While Loop ,Do while Loop ,For Loop , ForEach Loop
Jump statements
    break , continue -->