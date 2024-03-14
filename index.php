<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Web Project</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    color: #333;
}

h1 {
    text-align: center;
    color:#fff000;
}

p {
    margin: 0 auto;
    width: 80%;
    line-height: 1.5;
    text-align: center;
}

form {
    text-align: center;
    margin-top: 20px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #fff000;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
<body>
    <h1>Welcome to My Simple PHP Web Project</h1>
    <p>This is a small paragraph.</p>

    <?php
    // Check if the button is pressed
    if(isset($_POST['submit'])){
        echo "<p>Button Pressed! Message displayed.</p>";
    }
    ?>

    <form method="post">
        <input type="submit" name="submit" value="Press Me">
    </form>
</body>
</html>