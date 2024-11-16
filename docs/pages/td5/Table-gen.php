<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Tableau</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Générateur de Tableau HTML</h1>

<?php

$tableHTML = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 1;
    $cols = isset($_POST['cols']) ? (int)$_POST['cols'] : 1;


    $rows = min($rows, 100);
    $cols = min($cols, 100);


    $tableHTML .= "<table>\n";
    for ($i = 0; $i < $rows; $i++) {
        $tableHTML .= "<tr>\n";
        for ($j = 0; $j < $cols; $j++) {
            $tableHTML .= "<td>Cellule</td>\n";
        }
        $tableHTML .= "</tr>\n";
    }
    $tableHTML .= "</table>\n";
}
?>

<form method="POST" action="table-gen.php">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" name="rows" id="rows" min="1" max="100" value="1" required><br>

    <label for="cols">Nombre de colonnes :</label>
    <input type="number" name="cols" id="cols" min="1" max="100" value="1" required><br>

    <input type="submit" value="Générer le tableau">
</form>

<div class="table-container">
    <?php 

    echo $tableHTML; 
    ?>
</div>

<label for="tableCode">Code HTML du tableau :</label>
<textarea id="tableCode" rows="10" cols="70" readonly><?php echo htmlspecialchars($tableHTML); ?></textarea>

</body>
</html>
