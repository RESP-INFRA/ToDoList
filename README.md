Rapport de Projet : Application Web de gestion de tâches (ToDo List)

1. Présentation Générale

Objectif du Projet

Le projet consiste à concevoir, développer et déployer une application web permettant de gérer des tâches quotidiennes (ToDo List). Cette application permet aux utilisateurs d’effectuer les opérations suivantes :

* Ajouter une nouvelle tâche avec un libellé.
* Consulter l’ensemble des tâches enregistrées.
* Modifier les détails d’une tâche existante.
* Supprimer une tâche définitivement.

Ce projet vise également à intégrer des outils modernes de développement et de déploiement tels que Docker et Git, tout en favorisant la collaboration entre les membres de l'équipe.

2. Technologies Utilisées

| Composant        | Technologie      | Description                                                  |
| ---------------- | ---------------- | ------------------------------------------------------------ |
| Backend          | PHP 8.1          | Langage principal côté serveur pour le traitement des tâches |
| Base de données  | MySQL 8.0        | Stockage des tâches                                          |
| Frontend         | HTML/CSS         | Structure et mise en forme des pages                         |
| Conteneurisation | Docker + Compose | Déploiement local isolé et reproductible                     |
| Gestion de code  | Git              | Suivi de version et gestion de branches                      |

3. Organisation du Projet

Arborescence


todo-app/
├── app/                    
│   ├── index.php
│   ├── add.php
│   ├── insert.php
│   ├── list.php
│   ├── delete.php
│   ├── edit.php
│   ├── update.php
│   └── db.php
│
├── infrastructure/         
│   ├── Dockerfile
│   ├── docker-compose.yml
│   └── .env
│
└── README.md               


Description des Composants
app/ : comprend les fichiers nécessaires à la logique applicative en PHP.
infrastructure/ : contient les éléments pour configurer et exécuter les conteneurs Docker.
README.md: fournit les instructions pour l'installation, le lancement et l'utilisation.

4. Installation et Lancement (Environnement Local)

Prérequis

Avoir Docker et Docker Compose installés.
Avoir Git pour cloner le dépôt.

Étapes

1. Clonage du dépôt Git

git clone https://github.com/RESP-INFRA/todo-app.git
cd todo-app/infrastructure


2. Création du fichier .env
   Contenu suggéré :

MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=todo
MYSQL_USER=todo_user
MYSQL_PASSWORD=secret


3. Démarrage des conteneurs
docker-compose up -d


4. Accès à l'application**
   Dans un navigateur : [http://localhost:8080]

5. Fonctionnalités et Tests Fonctionnels

Fonctionnalités Implémentées

add.php : formulaire d’ajout d’une tâche.
insert.php : enregistrement de la tâche dans la base.
list.php : affichage des tâches sous forme de tableau.
edit.php / update.php : modification des données d’une tâche.
delete.php : suppression d’une tâche.

Tests Réalisés

* Ajout avec libellé valide.
* Modification d'une tâche avec ID existant.
* Suppression de tâche.
* Affichage correct d’une liste vide.
* Gestion d’erreurs en cas de champs vides ou ID invalide.

6. Améliorations UX/UI

* Ajout de structure HTML claire pour une navigation fluide.
* Préparation à l’ajout d’une feuille de style CSS.
* Responsive design à prévoir (non encore testé sur mobile).
* Messages d’erreur affichés de manière lisible.

7. Gestion de Versions (Git)

Arborescence des Branches

* main : branche principale, stable, contenant le produit fini.
* infrastructure : branche dédiée aux configurations Docker et .env.
* develop : branche de développement actif des fonctionnalités PHP.

Stratégie Git Adoptée

* Création de branches par fonctionnalité ou domaine.
* Merges vers `develop`, puis vers `main` une fois les tests validés.
* Utilisation de commits clairs : `feat: ajout de formulaire`, `fix: correction suppression`.

8. Collaboration et Répartition des Tâches

Équipe Infrastructure

* Fatouma ABDOU DJIBO
* Mohamed SEKOU DIALLO

Responsables de :

* Dockerfile et docker-compose.yml
* Fichier .env
* Mise en place des volumes et connexions réseaux

Équipe Développement

* Maguirat MAHAMAT
* Kine TOP

Responsables de :

* Création des fichiers PHP
* Connexion à la base MySQL
* Implémentation de la logique CRUD
* Vérification des entrées utilisateur

9. Présentation Finale

* Démonstration en local de l’application via navigateur.
* Parcours complet d’ajout, modification, suppression.
* Explication technique du Dockerfile, docker-compose et structure PHP.
* Présentation du suivi Git (captures d’écran de commits, logs Git).
* Ajout de captures d’écran de l’interface utilisateur.

10. Conclusion

Ce projet a permis de :

* Mettre en pratique les compétences en développement web PHP/MySQL.
* Utiliser un environnement Dockerisé pour isoler le projet.
* Structurer le travail d'équipe via Git avec des branches thématiques.
* Préparer une documentation claire pour la reproduction et la présentation.

Des améliorations futures peuvent inclure :

* Interface plus moderne avec CSS/JS.
* Tests automatisés avec PHPUnit.
* Hébergement sur un serveur distant (ex : VPS ou plateforme cloud).















