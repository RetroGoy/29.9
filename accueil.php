<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['pseudo'])): ?>
        <!-- Si l'utilisateur est connecté, on affiche son pseudo -->
        <p>Bonjour, <?php echo $_SESSION['pseudo']; ?>!</p>
        <a href="logout.php">Déconnexion</a>
    <?php else: ?>
        <!-- Si l'utilisateur n'est pas connecté, on affiche un message -->
        <p>Vous n'êtes pas connecté.</p>
    <?php endif; ?>
</body>
</html>
