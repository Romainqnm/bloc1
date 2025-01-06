<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $commentaire = htmlspecialchars($_POST['commentaire']);

    echo "<h1>Données soumises :</h1>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Commentaire :</strong> $commentaire</p>";
} else {
    echo "<p>Aucune donnée soumise.</p>";
}
?>