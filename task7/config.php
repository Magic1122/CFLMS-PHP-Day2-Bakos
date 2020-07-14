<?php
ob_start();            // Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/Berlin");

$con = mysqli_connect('localhost', 'root', '', 'class_work_test_db');

if (!$con) {
    echo "Failed to connect " . mysqli_connect_errno();
}

?>
