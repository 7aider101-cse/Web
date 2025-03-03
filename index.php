<?php
// Initialize an empty error message.
$errorMessage = "";

// Check if the form was submitted.
if (isset($_POST['submit'])) {
    // Retrieve and trim the answer from the form.
    $answer = trim($_POST['answer']);
    
    // In this example, the correct answer is "4".
    if ($answer === "4") {
        // Redirect to the congratulations page if the answer is correct.
        header("Location: congratulations.php");
        exit();
    } else {
        $errorMessage = "Incorrect answer. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple Question</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>What is 2 + 2?</h1>
        <form method="post" action="">
            <input type="text" name="answer" placeholder="Enter your answer">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        // If an error exists, display it.
        if ($errorMessage !== "") {
            echo "<p class='error'>$errorMessage</p>";
        }
        ?>
    </div>
</body>
</html>
