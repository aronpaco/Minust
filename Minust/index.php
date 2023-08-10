<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LEAVE A COMMENT</h1>
    <form action="process_comment.php" method="post">
        <label for="author">Author:</label>
        <input type="text" id="author" name="author">
        <br>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    include 'footer.php';
?>
