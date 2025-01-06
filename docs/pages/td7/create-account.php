<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "<h1>Compte créé avec succès !</h1>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Mot de passe :</strong> $password</p>";
} else {
    echo "<p>Aucune donnée soumise.</p>";
}
?>