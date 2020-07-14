<?php
    require 'config.php';       // importing the base setting with database connection

    // Declaring variables to prevent errors

    $fname = "";        // First Name
    $lname = "";        // Last Name
    $age = "";          // age

    $feedback_array = [];  // holds feedback messages

    if (isset($_POST['submit_button'])) {

        // First name

        $fname = strip_tags($_POST['fname']);               // Removes html tags
        $fname = str_replace(' ', '', $fname);              // Removes spaces
        $fname = ucfirst(strtolower($fname));               // Converts all letters to lowercase and capitalizes the first letter
        $_SESSION['fname'] = $fname;                        // Stores first name into session variable
        
        // Last name

        $lname = strip_tags($_POST['lname']);               // Removes html tag
        $lname = str_replace(' ', '', $lname);              // Removes spaces
        $lname = ucfirst(strtolower($lname));               // Converts all letters to lowercase and capitalizes the first letter
        $_SESSION['lname'] = $lname;                        // Store last name into session variable

        // Age

        $age = strip_tags($_POST['age']);                   // Removes html tag
        $_SESSION['age'] = $age;                            // Store age name into session variable

        if (strlen($fname) > 25 || strlen($fname) < 2) {

            array_push($feedback_array, "Your first name must be between 2 and 25 characters<br>");
    
        }
    
        if (strlen($lname) > 25 || strlen($lname) < 2) {
    
            array_push($feedback_array, "Your last name must be between 2 and 25 characters<br>");
            
        }
        
        
        if (empty($feedback_array)) {

            $query = "INSERT INTO user(fname, lname, age)
                VALUES('$fname', '$lname', '$age');";

            if (!$query) {
                // echo "Cannot Insert Data " . $con->error;
                array_push($feedback_array, 'Something went wrong when inserting your data!<br>');
            } else {
                array_push($feedback_array, 'Your Data was inserted successfully!<br>');
                $_SESSION['lname'] = '';
                $_SESSION['fname'] = '';
                $_SESSION['age'] = '';
                // echo "Data Inserted Successfully";
            };

            $con->close();

        }

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
    <form action="indert_data_form.php" method="POST">
            <input type="text" name="fname" placeholder="Your First Name" value="<?php
                    if (isset($_SESSION['fname'])) {
                        echo $_SESSION['fname'];
                    } ?>" required>
            <br>
            <input type="text" name="lname" placeholder="Your Last Name" value="<?php
                    if (isset($_SESSION['lname'])) {
                        echo $_SESSION['lname'];
                    } ?>" required>
            <br>
            <input type="number" name="age" placeholder="How old are You?" value="<?php
                    if (isset($_SESSION['age'])) {
                        echo $_SESSION['age'];
                    } ?>" required>
            <br>
            <input type="submit" value="Submit" name="submit_button">
        </form>
        <br>
        <?php if (in_array("Your first name must be between 2 and 25 characters<br>", $feedback_array)) echo "Your first name must be between 2 and 25 characters<br>";
                    else if (in_array("Your last name must be between 2 and 25 characters<br>", $feedback_array)) echo "Your last name must be between 2 and 25 characters<br>";
                    else if (in_array("Something went wrong when inserting your data!<br>", $feedback_array)) echo "Something went wrong when inserting your data!<br>"; 
                    else if (in_array("Your Data was inserted successfully!<br>", $feedback_array)) echo "Your Data was inserted successfully!<br>";
                    ?>



</body>
</html>