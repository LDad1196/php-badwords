<?php
        $text = $_GET["text"];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>Hello World PHP</h1>
    <h2>
        Il testo che hai scritto è:
        <?php
            echo $text;
        ?>
    </h2>
    <h3>
        il testo che hai scritto è composto da 
        <?php
            echo strlen($text) 
        ?>
        caratteri
    </h3>
    
</body>
</html>