<?php
    require 'config.php';       // importing the base setting with database connection

    $query = "SELECT * FROM user;";

    $result = mysqli_query($con, $query);

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
        if ($result -> num_rows == 0) {
            echo "<p>No results</p>";
        } elseif ($result -> num_rows == 1) {
            $row = $result -> fetch_assoc();

            echo '<p>' . $row['fname'] . " " . $row['lname'] . " " . $row['age'] . '</p>';
        } else {

            $rows = $result -> fetch_all(MYSQLI_ASSOC);

            foreach ($rows as $row) {
                echo '<p>' . $row['fname'] . " " . $row['lname'] . " " . $row['age'] . '</p>' . '<br>';
            }
        }
    ?>
</body>
</html>