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

    $query = "INSERT INTO user(fname, lname, age) 
    VALUES('Some', 'One', 30);";


    $adding_data = mysqli_query($db, $query);

    if (!$adding_data) {
        echo "Cannot Insert Data " . $db->error;
    } else {
        echo "Data Inserted Successfully";
    };

    $db->close();



?>
