<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur Lorem Ipsum</title>
</head>
<body>

<h1>Générateur de Texte Lorem Ipsum</h1>


<form method="POST" action="lorem-ipsum-gen.php">
    <label for="count">Nombre de paragraphes :</label>
    <input type="number" name="count" id="count" min="1" max="30" value="1">
    <input type="submit" value="Générer">
</form>

<label for="result">Résultat :</label>
<textarea id="result" rows="10" cols="70" readonly><?php echo htmlspecialchars($output); ?></textarea>

</body>
</html>
