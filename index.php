<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="elabora.php" method="GET">
    
    <input type="text" placeholder="Scrivi il tuo testo" name="text">
    
    <button type="submit">Invia</button>
    
</form>

<?php 
    strlen ($text): int;
?>

</body>
</html>