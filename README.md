#GestionPro-Gestion-Professionnelle-des-Virements-et-Missions

**GestionPro** est une application web PHP qui permet aux administrateurs de gérer les virements et les missions des employés au sein d'une société, tout en offrant une vue complète sur les statistiques liées aux virements et au nombre d'employés. L'application utilise une base de données MySQL, Bootstrap pour la conception, et est développée en PHP pour une gestion efficace des processus RH.

## Fonctionnalités
- Gestion des virements pour les employés.
- Gestion des missions des employés.
- Affichage des statistiques sur les virements et le nombre d'employés.
- Administration des rôles : admin, RH, utilisateur.
- Suivi des missions et des virements.
- Interface utilisateur réactive grâce à Bootstrap.

## Technologies utilisées
- **Langage serveur** : PHP
- **Base de données** : MySQL
- **Frontend** : Bootstrap (CSS & JS)
- **Backend** : PHP/MySQL

## Prérequis
Avant d'installer l'application, vous devez disposer de :
- Un serveur local (comme XAMPP, WAMP, MAMP).
- PHP version 7.3 ou plus.
- MySQL version 5.6 ou plus.
- Un navigateur compatible (Chrome, Firefox, Edge, etc.).

## Installation

### Étape 1 : Cloner le dépôt
Clonez le projet dans le répertoire racine de votre serveur local (par exemple, le dossier `htdocs` pour XAMPP) :

```bash
git clone https://github.com/ton-username/GestionPro-Gestion-Professionnelle-des-Virements-et-Missions.git
```

### Étape 2 : Configurer la base de données
1. Créez une base de données MySQL pour l'application :
   ```sql
   CREATE DATABASE mini_platform_db;
   ```
2. Importez le fichier `mini_platform_db.sql` inclus dans le projet dans la base de données nouvellement créée.

3. Configurez les informations de connexion à la base de données dans le fichier `config.php` :
   ```php
   <?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $dbname = "mini_platform_db";
   ?>
   ```

### Étape 3 : Configurer le serveur
1. Assurez-vous que votre serveur (XAMPP, WAMP, etc.) est en cours d'exécution.
2. Accédez à l'application via l'URL suivante dans votre navigateur :
   ```
   http://localhost/VirManSys-WebApp
   ```

### Étape 4 : Se connecter
Utilisez les identifiants par défaut pour vous connecter en tant qu'administrateur ou RH :
- **Administrateur** : 
  - Nom d'utilisateur : `admin`
  - Mot de passe : `admin123`
- **RH** : 
  - Nom d'utilisateur : `rh`
  - Mot de passe : `rh123`

### Étape 5 : Gérer les virements, missions et voir les statistiques
Une fois connecté, vous pourrez :
- Ajouter de nouvelles missions pour les employés.
- Gérer les virements des employés.
- Voir les statistiques sur les virements, le nombre d'employés, et d'autres informations pertinentes.

## Contribution
Si vous souhaitez contribuer à l'amélioration de l'application, vous pouvez forker ce dépôt et créer une pull request.

## License
Ce projet est sous licence MIT. Veuillez consulter le fichier `LICENSE` pour plus de détails.

---

Ce README inclut maintenant la gestion des statistiques pour les virements et le nombre d'employés, reflétant mieux les fonctionnalités complètes de l'application.
