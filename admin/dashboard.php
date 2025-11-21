<?php
require_once "../config.php";

$stmt = $pdo->query("SELECT * FROM newsletter_subscribers ORDER BY date_inscription DESC");
$subscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Newsletter</title>
<style>
    body { font-family: Arial; background:#111; color:#fff; padding:20px; }
    table { width: 100%; border-collapse: collapse; background:#222; }
    th, td { border: 1px solid #444; padding: 10px; }
    th { background:#333; }
    a { color: #ff5757; }
    .container { max-width: 900px; margin: auto; }
</style>
</head>
<body>

<div class="container">
    <h1>Liste des abonné.e.s newsletter</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Date d'inscription</th>
        </tr>

        <?php foreach ($subscribers as $s): ?>
        <tr>
            <td><?= $s['id'] ?></td>
            <td><?= htmlspecialchars($s['email']) ?></td>
            <td><?= $s['date_inscription'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>
