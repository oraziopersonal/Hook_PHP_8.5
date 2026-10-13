<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lorem Ipsum</h1>
    <p>Lorem ipsum <?php $var_One = "<h2>Welcome to My Website</h2>"; if ($var_One == "<h2>Welcome to My Website</h2>") { echo "dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."; } ?> </p>
    <?php
    $var_One = "<h2>Welcome to My Website</h2>";
    $var_Two = "<p>This is a simple PHP page.</p>";
    if (isset($_GET["message"])) {
        $message = htmlspecialchars($_GET["message"]);
        echo "<p>Message: $message</p>";
    } else if (isset($_GET["GET"])) {
        $message = htmlspecialchars($_GET["GET"]);
    echo $var_One;
    echo $var_Two;
    } else if (isset($_POST["POST"])) {
        $postData = htmlspecialchars($_POST["POST"]);
        echo "<p>POST Data: $postData</p>";
    } else {
        echo "<p>No message or POST data provided.</p>";
    }
    ?>
</body>
</html>
