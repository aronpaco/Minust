<?php
session_start();

$comment = $_POST['comment'];
$author = $_POST['author'];

require_once "../../config/config_me.php";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO comments_db (comment, author) 
        VALUES ('$comment', '$author')";

if (mysqli_query($connection, $sql)) {
    echo "Tagasiside saadetud.";
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
    Comment sent!
</body>
</html>