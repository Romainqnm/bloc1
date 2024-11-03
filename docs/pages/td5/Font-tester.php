<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Tester</title>
    <style>
        .message-container {
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Testeur de Polices</h1>

<form method="GET" action="font-tester.php">
    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
    <input type="hidden" name="color" value="<?php echo htmlspecialchars($color); ?>">
    <input type="hidden" name="size" value="<?php echo $size + 5; ?>">
    <button type="submit">Augmenter Taille (+5)</button>
</form>

<form method="GET" action="font-tester.php">
    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
    <input type="hidden" name="color" value="<?php echo htmlspecialchars($color); ?>">
    <input type="hidden" name="size" value="<?php echo max($size - 5, 1); ?>">
    <button type="submit">Diminuer Taille (-5)</button>
</form>

</body>
</html>
