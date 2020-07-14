<?php
    function divide($num1, $num2) {
        return $num1 / $num2;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>" . divide(10, 5) . "</h2>";
    ?>
</body>
</html>