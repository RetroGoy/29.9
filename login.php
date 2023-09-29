<?php
session_start();

// Tableau associatif contenant les utilisateurs et leurs mots de passe.
$users = [
    "jose" => "jose",
];

// Récuperer le pseudo et le mot de passe de l'user
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

// Vérifier que pseudo existe dans notre tableau d'utilisateurs et que le mdp correspond à celui associé à ce pseudo
if (isset($users[$pseudo]) && $users[$pseudo] === $password) {
    // Stocker le pseudo dans la session pour indiquer que l'utilisateur est connecté.
    $_SESSION['pseudo'] = $pseudo;
    
    header("Location: accueil.php");
    exit;
} else {
    // Sinon stocker l'erreur dans la session
    $_SESSION['error'] = "Identifiants incorrects!";
    
    // Redirection vers la page de connexion pour afficher le message d'erreur.
    header("Location: connexion.php");
    exit; // Arrêt du script pour s'assurer que la redirection s'effectue.
}
