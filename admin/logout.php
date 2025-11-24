<?php
session_start();

// On détruit toutes les variables de session
$_SESSION = [];

// On détruit la session côté serveur
session_destroy();

// On redirige vers la page de connexion
header("Location: index.php");
exit;
?>
