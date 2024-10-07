<?php
session_start();
include_once('connection.php');


// Récupérer le nombre d'utilisateurs
$sql = "SELECT COUNT(*) AS total FROM tbl_user";
$result = $conn->query($sql);
$totalUsers = $result->fetch_assoc()['total'];

// Récupérer les users
$sql = "SELECT id, name, username FROM tbl_user";
$users = $conn->query($sql);

// Récupérer les rh  
$sqlRH = "SELECT mail, pwd, name FROM rh";
$rh = $conn->query($sqlRH);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }

        .sidebar-header {
            text-align: center;
        }

        .sidebar-nav ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-nav ul li {
            margin: 20px 0;
        }

        .sidebar-nav ul li a {
            color: white;
            text-decoration: none;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .header {
            background-color: #ecf0f1;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
        }

        .user-table {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-table th, .user-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .user-table th {
            background-color: #f4f4f9;
        }

        .add-rh-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .add-rh-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Utilisateurs</a></li>
                    <li><a href="#">Statistiques</a></li>
                    <li><a href="#">Paramètres</a></li>
                    <li><a href="logRH.php">Déconnexion</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Bienvenue, Admin</h1>
            </header>
            <section class="cards">
                <div class="card">
                    <h3>Nombre d'utilisateurs</h3>
                    <p><?php echo $totalUsers; ?></p>
                </div>
            </section>
            <a href="user_rhh.php" class="add-rh-btn">Ajouter RH</a>
            <section class="user-table">
                <h2>Liste des utilisateurs</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($users->num_rows > 0): ?>
                            <?php while($row = $users->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">Aucun utilisateur trouvé</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>


                <h2>Liste des rh</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($rh->num_rows > 0): ?>
                            <?php while($row = $rh->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['mail']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">Aucun utilisateur trouvé</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
<?php
$conn->close();
?>
