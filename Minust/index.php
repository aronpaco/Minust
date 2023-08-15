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
    <form method="post" action="process_comment.php">
            <label for="overall_feedback" id="overall_feedback">Leave a comment </label>
            <br>

            <label for="comment" id="comment">Comment here: </label>
            <br>
            <input type="text" name="comment" id="comment" placeholder="Comment..." maxlength="400">
            <br>

            <label for="author" id="author">Kui soovid jätta detailsemat tagasisidet:</label>
            <br>
            <textarea name="author" id="author" placeholder="Trüki siia" maxlength="400"></textarea>
            <br>

            <button class="submit_btn" type="submit">Send comment</button>
            <br>
        </form>
</body>
</html>

<?php
    include 'footer.php';
?>
