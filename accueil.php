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
        <!-- Afficher le pseudo -->
        <p>Bonjour, <?php echo $_SESSION['pseudo']; ?>!</p>
        <a href="logout.php">Déconnexion</a>
    <?php else: ?>
        <p>Vous n'êtes pas connecté.</p>
    <?php endif; ?>
</body>
</html>
