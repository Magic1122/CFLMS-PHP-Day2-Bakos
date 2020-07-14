<?php
    $path = 'localhost';
    $user = 'root';
    $pwd = '';

    $db = mysqli_connect($path, $user, $pwd);

    if (!$db) {
        die('Connection failure' . mysqli_connect_error());
    }

    echo "Connected Successfully! \n";

    $query = "CREATE DATABASE class_work_test_db";

    $createdb = mysqli_query($db, $query);

    if (!$createdb) {
        echo "Database creation error" . $db->error;
    } else {
        echo "Database created successfully";
    };

    $db->close();
    
?>