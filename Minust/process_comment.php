<?php
session_start();

$comment = $_POST['comment'];
$author = $_POST['author'];

require_once "../../config.php";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO comments (comment, author, date_time) 
        VALUES ('$comment', '$author', NOW())";

if (mysqli_query($connection, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment saved</title>
</head>
<body>
    <form action="index.php" method="post">
        <!-- Your form inputs go here (comment and author) -->
        <input type="submit" name="submit" value="bACKS">
    </form>
</body>
</html>
