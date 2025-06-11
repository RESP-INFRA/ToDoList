<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM tasks ORDER BY id DESC");
$taches = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liste des tâches</title>
</head>
<body>
    <h1>Vos tâches</h1>
    <ul>
        <?php foreach ($taches as $t): ?>
            <li>
                <?= htmlspecialchars($t['title']) ?>
                - <a href="edit.php?id=<?= $t['id'] ?>">Modifier</a>
                - <a href="delete.php?id=<?= $t['id'] ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="index.php">Retour</a></p>
</body>
</html>

<link rel="stylesheet" href="style.css">
