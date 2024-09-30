<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Google's Secret</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .flag {
            font-size: 1.5em;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>The Google's Secret</h1>
        <p>Google's crawlers find everything. Can you impersonate one?</p>
        <?php

        $flag = "IotCtf{Google-Bot-Is-Here}";
        if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'googlebot') !== false) {
            echo '<p class="flag">Congratulations! Here is your flag: ' . $flag . '</p>';
        } else {
            echo '<p>Sorry, you are not Googlebot! Try again with a different identity.</p>';
        }
        ?>
    </div>
</body>
</html>
