# 📌 Application Web de gestion de tâches (ToDo List)

## 🎯 Objectif

Développer et déployer une application web de type ToDo List avec Docker, permettant :

- D'ajouter, modifier, supprimer et consulter des tâches.
- De sauvegarder les tâches dans une base de données MySQL.
- D'utiliser Git avec une gestion de branches structurée.
- De collaborer entre les volets infrastructure et développement.

---

## ⚙️ Technologies utilisées

- PHP 8.1 + Apache
- MySQL 8.0
- Docker / Docker Compose
- Git
- HTML/CSS

---

## 🏗️ Structure du projet

todo-app/
│
├── app/ # Code source PHP
│ ├── index.php
│ ├── add.php
│ ├── insert.php
│ ├── list.php
│ ├── delete.php
│ ├── edit.php
│ ├── update.php
│ └── db.php
│
├── infrastructure/ # Configuration Docker
│ ├── Dockerfile
│ ├── docker-compose.yml
│ └── .env
│
└── README.md # Documentation du projet



---

## 🚀 Lancement du projet (local avec Docker)

1. **Cloner le projet** :

   ```bash
   git clone <url-du-repo>
   cd todo-app/infrastructure


2. Créer un fichier .env :
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=todo
MYSQL_USER=todo_user
MYSQL_PASSWORD=secret



3. Lancer les conteneurs :
docker-compose up -d

4. Accéder à l'application :

Ouvrir http://localhost:8080 dans le navigateur.

🧪 Fonctionnalités CRUD
✅ Ajouter une tâche (add.php)

✅ Afficher toutes les tâches (list.php)

✅ Modifier une tâche (edit.php / update.php)

✅ Supprimer une tâche (delete.php)

✔️ Tests fonctionnels
Ajout de tâche avec succès ✅

Modification avec ID valide ✅

Suppression d’une tâche ✅

Affichage vide ou erreurs gérées ✅

Champs vides : erreurs traitées ✅

🎨 Améliorations UX/UI
Ajout de structure HTML simple

Préparation à l’ajout de CSS

Responsive à tester (pas encore intégré)

🌱 Git & Collaboration
Branche main : code final

Branche infrastructure : Docker, .env, configuration

Branche develop : développement PHP

🖥️ Présentation
Démonstration locale via navigateur

Capture d’écran de l’application (à insérer ici)

Présentation à l’oral avec explication de chaque étape

📸 Captures d’écran
(À insérer ici)

✍️ Auteurs
Responsable infrastructure : Fatouma ABDOU DJIBO et Mohamed SEKOU DIALLO

Responsable développement : Maguirat MAHAMAT ET Kine TOP














