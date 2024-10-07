<!doctype html>
<html lang="en">
<head>
  <title>View Virements</title>
  <meta charset="utf-8">
  <header>
    <?php 
    include("navbarRH.php");
    ?>
  </header> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Liste des virements</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Montant</th>
          <th>Type de virement</th>
          <th>Date du virement</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        session_start();
        include_once('connection.php');
        
        // Récupérer le nom de l'utilisateur à partir de la session PHP
     //   $effectue_par = $_SESSION['name'];

        $sql = "SELECT * FROM virements";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['montant'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td><a href='deleteRH.php?id=" . $row['id'] . "' class='btn btn-danger'>Supprimer</a>
                <a href='modifvirement.php?id=" . $row['id'] . "' class='btn btn-success'>Modifier</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Aucun virement trouvé</td></tr>";
        }

        mysqli_close($conn);
        ?>
      </tbody>
    </table>
    <a href="virementRH.php" class="btn btn-primary">Ajouter un virement</a>
  </div>
</body>
</html>