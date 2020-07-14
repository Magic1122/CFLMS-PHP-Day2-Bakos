<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="fname" placeholder="Your First Name">
        <br>
        <input type="text" name="lname" placeholder="Your Last Name">
        <br>
        <input type="submit" value="Submit" name="submit_button">
    </form>
    <?php
        if(isset($_POST['submit_button'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];

            if ($fname && $lname) {
                echo "<p>Hello $fname $lname! Nice to meet You!</p>";
            } else {
                echo "<p>Please fill in your First and Last name!</p>";
            }
        }
    ?>
</body>
</html>