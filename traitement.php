<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs des champs
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Comparez les identifiants avec ceux stockés dans votre système
    
    $username_saved = "boullaych"; 
    $password_saved = "test26"; 

    if ($username == $username_saved && $password == $password_saved) {
        // Identifiants valides, redirigez l'utilisateur vers une nouvelle page
        header("Location: RV-71.html");
        exit();
    } else {
        // Identifiants invalides, faites quelque chose (par exemple, affichez un message d'erreur)
        echo "Identifiants invalides. Veuillez réessayer.";
    }
} else {
    // Le formulaire n'a pas été soumis, redirigez l'utilisateur vers la page de connexion
    header("Location: connexion.html");
    exit();
}
?>
