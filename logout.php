<?php
session_start();
session_unset();
session_destroy();

// Redirection de l'utilisateur vers la page de connexion après la déconnexion.
header("Location: connexion.php");
exit;
