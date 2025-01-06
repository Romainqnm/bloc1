document.getElementById('password').addEventListener('input', function () {
    const password = this.value;
    let strength = 0;

    // Critères de force du mot de passe
    if (password.length >= 8) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;

    // Affichage de la force du mot de passe
    const strengthText = ['Aucune', 'Faible', 'Moyenne', 'Bonne', 'Excellente'][strength];
    document.getElementById('password-strength').textContent = `Force : ${strengthText}`;
});

document.getElementById('signin-form').addEventListener('submit', function (event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Vérification de la correspondance des mots de passe
    if (password !== confirmPassword) {
        alert("Les mots de passe ne correspondent pas.");
        event.preventDefault();
    }

    // Vérification de la force du mot de passe
    if (password.length < 8 || !/[A-Z]/.test(password) || !/[0-9]/.test(password) || !/[^A-Za-z0-9]/.test(password)) {
        alert("Le mot de passe doit être de force Excellente.");
        event.preventDefault();
    }
});