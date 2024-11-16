<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Tableau avec Fusion de Cellules</title>
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

<h1>Générateur de Tableau HTML avec Fusion de Cellules</h1>

<?php
$tableHTML = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 1;
    $cols = isset($_POST['cols']) ? (int)$_POST['cols'] : 1;
    $mergeRow = isset($_POST['mergeRow']) ? (int)$_POST['mergeRow'] : 1;
    $mergeCol = isset($_POST['mergeCol']) ? (int)$_POST['mergeCol'] : 1;
    $rowSpan = isset($_POST['rowSpan']) ? (int)$_POST['rowSpan'] : 1;
    $colSpan = isset($_POST['colSpan']) ? (int)$_POST['colSpan'] : 1;

    $rows = min($rows, 100);
    $cols = min($cols, 100);

    $tableHTML .= "<table>\n";
    for ($i = 0; $i < $rows; $i++) {
        $tableHTML .= "<tr>\n";
        for ($j = 0; $j < $cols; $j++) {
            if ($i == $mergeRow && $j == $mergeCol) {
                $tableHTML .= "<td rowspan='{$rowSpan}' colspan='{$colSpan}'>Cellule fusionnée</td>\n";
                $j += $colSpan - 1;
            } elseif (!($i >= $mergeRow && $i < $mergeRow + $rowSpan && $j >= $mergeCol && $j < $mergeCol + $colSpan)) {
                $tableHTML .= "<td>Cellule</td>\n";
            }
        }
        $tableHTML .= "</tr>\n";
    }
    $tableHTML .= "</table>\n";
}
?>

<form method="POST" action="table-gen-plus.php">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" name="rows" id="rows" min="1" max="100" value="1" required><br>

    <label for="cols">Nombre de colonnes :</label>
    <input type="number" name="cols" id="cols" min="1" max="100" value="1" required><br>

    <h3>Paramètres de fusion de cellules</h3>
    <label for="mergeRow">Ligne de départ pour la fusion :</label>
    <input type="number" name="mergeRow" id="mergeRow" min="0" value="0"><br>

    <label for="mergeCol">Colonne de départ pour la fusion :</label>
    <input type="number" name="mergeCol" id="mergeCol" min="0" value="0"><br>

    <label for="rowSpan">Nombre de lignes à fusionner (rowspan) :</label>
    <input type="number" name="rowSpan" id="rowSpan" min="1" value="1"><br>

    <label for="colSpan">Nombre de colonnes à fusionner (colspan) :</label>
    <input type="number" name="colSpan" id="colSpan" min="1" value="1"><br>

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
