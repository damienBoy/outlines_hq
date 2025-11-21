<?php
// Paramètres de connexion
$host = "localhost";
$dbname = "outlines";       // ⚠️ Le nom EXACT de ta base MySQL !
$username = "root";         // Par défaut MAMP
$password = "root";         // Par défaut MAMP sur mac, vide "" sur Windows

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Options de sécurité + erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("❌ Erreur de connexion : " . $e->getMessage());
}
?>
