<?php
require 'db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "ID manquant.";
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = ?");
$stmt->execute([$id]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$task) {
    echo "Tâche introuvable.";
    exit;
}
?>

<h2>Modifier la tâche</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $task['id'] ?>">
    <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
    <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>
    <button type="submit">Mettre à jour</button>
</form>
<a href="list.php">Retour</a>
