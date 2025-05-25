<?php
require 'db.php';

$id = $_POST['id'] ?? null;
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';

if (!$id || !$title) {
    echo "Données invalides.";
    exit;
}

$stmt = $pdo->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
$stmt->execute([$title, $description, $id]);

header('Location: list.php');
exit;
