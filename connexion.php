<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Affichage du message d'erreur si l'identifiant n'esiste pas -->
    <?php if (isset($_SESSION['error'])): ?>
        <p><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>

    <!-- Formulaire de connexion -->
    <form action="login.php" method="POST">
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Connexion</button>
    </form>

    <a href="accueil.php">Accéder à l'accueil sans se connecter</a>
</body>
</html>
