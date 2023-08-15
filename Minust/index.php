<?php
    include 'header.php';
?>

<?php

require_once "../../config.php";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve data
$sql = "SELECT id, comment, author, date_time FROM comments";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="commentContainer">
        <h1>Comments</h1>

        <?php
        $commentLimit = 5; // Set the maximum number of comments to display
        $commentCount = 0; // Initialize the comment counter
        
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                if ($commentCount >= $commentLimit) {
                    break; // Stop displaying comments after reaching the limit
                }
                
                $comment = $row["comment"];
                $author = $row["author"];
                $date_time = $row["date_time"];
                
                echo "<div class='comment'>
                        <p class='comment-text'>$comment</p>
                        <p class='author'>$author</p>
                        <p class='date-time'>$date_time</p>
                    </div>";
                
                $commentCount++;
            }
        } else {
            echo "No comments found.";
        }
        ?>
    </div>
     
    <div id="leaveCommentContainer">
        <h1>LEAVE A COMMENT</h1>
        <form method="post" action="process_comment.php">
            <label for="overall_feedback" id="overall_feedback">Leave a comment </label>
            <br>
            <label for="comment" id="comment">Comment here: </label>
            <br>
            <textarea type="text" name="comment" id="comment" placeholder="Comment..." maxlength="255" required></textarea>
            <br>

            <label for="author" id="author">Author: </label>
            <br>
            <input name="author" id="author" placeholder="Author..." maxlength="40"></input>
            <br>

            <button class="submit_btn" type="submit">Send comment</button>
            <br>
        </form>
    </div>
    
</body>
</html>

<?php
    include 'footer.php';
?>
