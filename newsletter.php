<?php
// newsletter.php

header('Content-Type: application/json; charset=utf-8');

// ------------------------------------------------------
// 1. PARAMÈTRES DE CONNEXION (à adapter selon ton MAMP)
// ------------------------------------------------------
$host = "localhost";
$user = "root";        // identifiant MySQL
$pass = "root";        // mot de passe MAMP sous Mac ("" sur Windows)
$dbname = "outlines";  // nom de ta base de données

$conn = new mysqli($host, $user, $pass, $dbname);

// Erreur de connexion
if ($conn->connect_error) {
    echo json_encode([
        "status" => "error",
        "message" => "Erreur serveur : connexion impossible."
    ]);
    exit;
}

// ------------------------------------------------------
// 2. VALIDATION DES DONNÉES PROVENANT DU FORMULAIRE
// ------------------------------------------------------
$email = $_POST['email'] ?? '';
$consent = isset($_POST['consent']); // checkbox "on" si cochée

// Vérifier email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        "status" => "error",
        "message" => "Adresse email invalide."
    ]);
    exit;
}

// Vérifier consentement RGPD
if (!$consent) {
    echo json_encode([
        "status" => "error",
        "message" => "Tu dois accepter la Politique de Confidentialité."
    ]);
    exit;
}

// ------------------------------------------------------
// 3. VÉRIFIER SI L’EMAIL EXISTE DÉJÀ
// ------------------------------------------------------
$stmt = $conn->prepare("SELECT id FROM newsletter_subscribers WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode([
        "status" => "error",
        "message" => "Cet email est déjà inscrit à la newsletter."
    ]);
    $stmt->close();
    $conn->close();
    exit;
}
$stmt->close();

// ------------------------------------------------------
// 4. INSÉRER LE NOUVEL EMAIL
// ------------------------------------------------------
$consentValue = 1;

$stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email, consentement) VALUES (?, ?)");
$stmt->bind_param("si", $email, $consentValue);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "success",
        "message" => "🎉 Merci ! Ton inscription à la newsletter est confirmée."
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Erreur lors de l'inscription. Réessaie plus tard."
    ]);
}

$stmt->close();
$conn->close();
