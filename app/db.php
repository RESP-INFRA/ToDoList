<?php
$host = 'db'; // Nom du service MySQL
$db   = 'todo';
$user = 'todo_user';
$pass = 'secret';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
