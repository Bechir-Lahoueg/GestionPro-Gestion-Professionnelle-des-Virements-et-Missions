<?php
include_once('connection.php');

if (isset($_POST['update_mission'])) {
    // Récupération et sécurisation des données envoyées via le formulaire
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $distinataire = mysqli_real_escape_string($conn, $_POST['distinataire']);
    $poste = mysqli_real_escape_string($conn, $_POST['poste']);
    $domaine = mysqli_real_escape_string($conn, $_POST['domaine']);
    $date_de_debut_mission = mysqli_real_escape_string($conn, $_POST['date_de_debut_mission']);
    $date_de_fin_mission = mysqli_real_escape_string($conn, $_POST['date_de_fin_mission']);

    // Requête de mise à jour
    $sql = "UPDATE missions SET 
            distinataire='$distinataire', 
            poste='$poste', 
            domaine='$domaine', 
            date_de_debut_mission='$date_de_debut_mission', 
            date_de_fin_mission='$date_de_fin_mission' 
            WHERE id='$id'";

    // Exécution de la requête
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Mission modifiée avec succès'); window.location.href = 'view_mission.php';</script>";
    } else {
        die("Erreur de base de données: " . mysqli_error($conn));
    }
}

// Afficher le formulaire de modification si l'ID est passé en paramètre GET
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Récupérer les informations actuelles de la mission
    $sql = "SELECT * FROM missions WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $mission = mysqli_fetch_assoc($result);

    // Formulaire HTML pour la modification
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <title>Modifier Mission</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Modifier Mission</h2>
            <form action="modif.php" method="post">
                <input type="hidden" name="id" value="<?php echo $mission['id']; ?>">
                <div class="mb-3">
                    <!--label for="distinataire" class="form-label">Distinataire</label>
                    <input type="text" class="form-control" id="distinataire" name="distinataire" value="<?php echo $mission['distinataire']; ?>" required-->
                </div>
                <div class="mb-3">
                    <label for="poste" class="form-label">Poste</label>
                    <input type="text" class="form-control" id="poste" name="poste" value="<?php echo $mission['poste']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="domaine" class="form-label">Domaine</label>
                    <input type="text" class="form-control" id="domaine" name="domaine" value="<?php echo $mission['domaine']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="date_de_debut_mission" class="form-label">Date de Début de la Mission</label>
                    <input type="date" class="form-control" id="date_de_debut_mission" name="date_de_debut_mission" value="<?php echo $mission['date_de_debut_mission']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="date_de_fin_mission" class="form-label">Date de Fin de la Mission</label>
                    <input type="date" class="form-control" id="date_de_fin_mission" name="date_de_fin_mission" value="<?php echo $mission['date_de_fin_mission']; ?>" required>
                </div>
                <button type="submit" name="update_mission" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>
