<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: index.php");
    exit;
}

require "../config.php";

if (!isset($_GET["id"])) {
    header("Location: dashboard.php");
    exit;
}

$id = intval($_GET["id"]);

$stmt = $pdo->prepare("DELETE FROM newsletter_subscribers WHERE id = ?");
$stmt->execute([$id]);

header("Location: dashboard.php");
exit;
?>
