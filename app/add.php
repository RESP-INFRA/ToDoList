<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une tâche</title>
</head>
<body>
    <h1>Ajouter une nouvelle tâche</h1>
    <form action="insert.php" method="POST">
        <label>Titre :</label><br>
        <input type="text" name="title" required><br><br>
        <input type="submit" value="Ajouter">
    </form>
    <p><a href="index.php">Retour</a></p>
</body>
</html>
