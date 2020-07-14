<?php
    $path = 'localhost';
    $user = 'root';
    $pwd = '';
    $base = 'class_work_test_db';

    $db = mysqli_connect($path, $user, $pwd, $base);

    if (!$db) {
        die('Connection failure ' . mysqli_connect_error() . "\n");
    }

    echo "Connected Successfully! \n";

    $query = "CREATE TABLE user(
        id INT PRIMARY KEY AUTO_INCREMENT,
        fname VARCHAR(55) NOT NULL, 
        lname VARCHAR(55) NOT NULL, 
        age INT NOT NULL
    );";

    $createdb = mysqli_query($db, $query);

    if (!$createdb) {
        echo "Table creation error " . $db->error;
    } else {
        echo "Table created successfully";
    };

    $db->close();

?>

