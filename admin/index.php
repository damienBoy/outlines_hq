<?php
session_start();

// Mot de passe admin (À CHANGER par le tien)
$ADMIN_PASSWORD = "OutlinesAdmin0518";

if (isset($_POST["password"])) {
    if ($_POST["password"] === $ADMIN_PASSWORD) {
        $_SESSION["admin"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "❌ Mot de passe incorrect.";
    }
}

// Si déjà connecté → redirection automatique
if (isset($_SESSION["admin"])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #111;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #222;
            padding: 25px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: none;
        }
        button {
            padding: 10px 20px;
            background: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background: #ddd;
        }
        .error { color: #ff4444; margin-bottom: 10px; }
    </style>
</head>
<body>

<form action="" method="POST">
    <h2>Admin Outlines</h2>

    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

    <input type="password" name="password" placeholder="Mot de passe admin" required>
    <button type="submit">Connexion</button>
</form>

</body>
</html>
