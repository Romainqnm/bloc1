<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message PHP</title>
</head>
<body>
    <h1>Afficher un message</h1>
    
    <?php
    $message = isset($_GET['message']) ? $_GET['message'] : "Message par défaut";
    echo "<p>$message</p>";
    ?>
</body>
</html>
