<?php
include_once('connection.php');

if (isset($_POST['update_virements'])) {
    // Sécuriser les données provenant du formulaire
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $montant = mysqli_real_escape_string($conn, $_POST['montant']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Requête de mise à jour
    $sql = "UPDATE virements SET 
    montant='$montant', 
    type='$type', 
    date='$date' 
    WHERE id='$id'";

    // Exécuter la requête
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Virement modifié avec succès'); window.location.href = 'view_virementsRH.php';</script>";
    } else {
        die("Erreur de base de données: " . mysqli_error($conn));
    }
}

// Afficher le formulaire de modification si l'ID est passé via le paramètre GET
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Récupérer les informations actuelles du virement
    $sql = "SELECT * FROM virements WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $virement = mysqli_fetch_assoc($result);

    // Formulaire HTML pour la modification
    ?>


    <!doctype html>
    <html lang="en">
    <head>
        <title>Modifier Virement</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Modifier Virement</h2>
            <form  method="post">
                <input type="hidden" name="id" value="<?php echo $virement['id']; ?>">
                <div class="mb-3">
                    <label for="montant" class="form-label">Montant</label>
                    <input type="text" class="form-control" id="montant" name="montant" value="<?php echo $virement['montant']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type
                    <select id="form3Example4c" class="form-control form-control-lg py-3" name="type" style="border-radius:25px;">
      <option value="" disabled selected>Choisissez un type</option>
      <option value="Rénumération">Rénumération</option>
      <option value="Cooptation">Cooptation</option>
      <option value="Participation">Participation</option>
    </select>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date" value="<?php echo $virement['date']; ?>" required>
                </div>
                
                <button type="submit" name="update_virements" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>
