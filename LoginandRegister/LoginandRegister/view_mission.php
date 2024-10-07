<!doctype html>
<html lang="en">
<head>
  <title>View Missions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>List of Missions</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>poste</th>
          <th>domaine</th>
          <th>date_de_debut_mission</th>
          <th>date_de_fin_mission</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once('connection.php');
        $sql = "SELECT * FROM missions";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['poste'] . "</td>";
                echo "<td>" . $row['domaine'] . "</td>";
                echo "<td>" . $row['date_de_debut_mission'] . "</td>";
                echo "<td>" . $row['date_de_fin_mission'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                <a href='modif.php?id=" . $row['id'] . "' class='btn btn-success'>Modifier</a>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No missions found</td></tr>";
        }

        mysqli_close($conn);
        ?>
      </tbody>
    </table>
    <a href="mission.php" class="btn btn-primary">Add New Mission</a>
    <a href="welcome.php" class="btn btn-primary"><--</a>

  </div>



</body>
</html>
