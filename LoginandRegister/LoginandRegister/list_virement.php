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
    <h2>Liste des virements</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>montant</th>
          <th>type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once('connection.php');
        $sql = "SELECT * FROM virements";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['montant'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No missions found</td></tr>";
        }

        mysqli_close($conn);
        ?>
      </tbody>
    </table>
    <a href="welcome.php" class="btn btn-primary"><--</a>
  </div>



</body>
</html>
