<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur Lorem Ipsum</title>
</head>
<body>

<h1>Générateur de Texte Lorem Ipsum</h1>

<?php
$paragraphs = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Vivamus luctus urna sed urna ultricies ac tempor dui sagittis.",
    "In condimentum facilisis porta.",
    "Sed nec diam eu diam mattis viverra.",
    "Nulla fringilla, orci ac euismod semper.",
    "Pellentesque eget lacus vel elit maximus lacinia.",
    "Curabitur venenatis erat id vehicula viverra.",
    "Ut pellentesque augue ut arcu rutrum, nec lacinia mauris tempus.",
    "Cras rhoncus felis eget urna tincidunt scelerisque.",
    "Etiam sit amet libero elit.",
    "Donec vitae libero ac arcu gravida tincidunt non non quam.",
    "Mauris vel orci eu leo placerat faucibus.",
    "Nam a justo fermentum, viverra turpis at, cursus augue.",
    "Vestibulum eu justo at libero luctus vehicula.",
    "Suspendisse vehicula lectus nec magna auctor gravida.",
    "Integer suscipit massa a dui aliquet, sit amet luctus erat tempor.",
    "Maecenas luctus lectus quis erat suscipit, a luctus eros pharetra.",
    "Nunc non orci sed nisl consequat eleifend.",
    "Aliquam eget urna et erat ullamcorper congue.",
    "Praesent bibendum elit vitae metus aliquam, at interdum urna consequat.",
    "Sed eget quam sed lorem porttitor facilisis.",
    "Pellentesque sed magna non turpis tempor volutpat.",
    "Vestibulum vestibulum eros non efficitur pretium.",
    "Nulla facilisi. Donec efficitur eros eu erat facilisis volutpat.",
    "Suspendisse nec sem in libero hendrerit luctus.",
    "Aliquam condimentum est ut risus mollis, ut convallis magna sollicitudin.",
    "Fusce id nunc a leo venenatis vehicula.",
    "Phasellus ullamcorper sem nec ex cursus, et bibendum elit tincidunt.",
    "Ut scelerisque sapien vel ligula accumsan, ac hendrerit urna aliquet.",
    "Curabitur vehicula lacus ut nunc egestas, sed convallis est varius.",
];


$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $count = isset($_POST['count']) ? (int)$_POST['count'] : 1;

    $count = min($count, count($paragraphs));

    for ($i = 0; $i < $count; $i++) {
        $output .= $paragraphs[$i] . "\n\n";
    }
}
?>

<form method="POST" action="lorem-ipsum-gen.php">
    <label for="count">Nombre de paragraphes :</label>
    <input type="number" name="count" id="count" min="1" max="30" value="1">
    <input type="submit" value="Générer">
</form>

<label for="result">Résultat :</label>
<textarea id="result" rows="10" cols="70" readonly><?php echo htmlspecialchars($output); ?></textarea>

</body>
</html>
