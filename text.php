<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Что мне пришло</h1>
    <?php
        if (isset($_GET['message'])) {
            print('<p>Пришло соо:</p>');
            print("<p><i>{$_GET['message']}</i></p>");
        } else {
            print('<p>Ничего не пришло...</p>');
        }
    ?>
</body>
</html>