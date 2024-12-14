<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>

    <h2>Submit Your Review</h2>
    
    <!-- Review Form -->
    <form action= "thanks.php" method="POST">
        <label for="review">Your Review:</label><br>
        <textarea name="review" id="review" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit Review</button>
    </form>



</body>
</html>