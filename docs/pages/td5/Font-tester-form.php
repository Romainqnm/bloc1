<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Tester avec Formulaire</title>
    <style>
        .message-container {
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Testeur de Polices avec Formulaire</h1>

<form method="POST" action="font-tester-form.php">
    <label for="message">Message :</label><br>
    <textarea name="message" id="message" rows="4" cols="50" placeholder="Entrez votre message ici..."><?php echo htmlspecialchars($message); ?></textarea><br>

    <label for="size">Taille :</label>
    <input type="number" name="size" id="size" value="<?php echo $size; ?>"><br>

    <label for="color">Couleur :</label>
    <input type="color" name="color" id="color" value="<?php echo $color; ?>"><br>

    <input type="submit" value="Afficher le message">
</form>

</body>
</html>
