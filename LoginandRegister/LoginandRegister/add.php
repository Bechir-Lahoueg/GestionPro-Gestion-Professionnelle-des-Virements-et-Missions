<?php
include_once('connection.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $cinNum = $_POST['cin_num'];
    $dateOfBirth = $_POST['date_de_naissance'];
    $placeOfBirth = $_POST['lieu_de_naissance'];
    $countryOfResidence = $_POST['pays_de_residence'];
    $poste = $_POST['poste'];
    $domaineActivite = $_POST['domaine_d_activite'];
    $nomClientFinal = $_POST['nom_du_client_final'];
    $nomRepresentantClient = $_POST['nom_du_representant_du_client'];
    $mailRepresentantClient = $_POST['mail_du_representant_du_client'];
    $posteRepresentantClient = $_POST['poste_du_representant_du_client'];
    $dateDebutMission = $_POST['date_de_debut_de_la_mission'];
    $dateFinMission = $_POST['date_de_fin_de_la_mission'];
    $TJM = $_POST['TJM'];

    $sql = "INSERT INTO `tbl_user` (`name`, `username`, `password`, `cin_num`, `date_de_naissance`, `lieu_de_naissance`, `pays_de_residence`, `poste`, `domaine_d_activite`, `nom_du_client_final`, `nom_du_representant_du_client`, `mail_du_representant_du_client`, `poste_du_representant_du_client`, `date_de_debut_de_la_mission`, `date_de_fin_de_la_mission`, `TJM`) 
        VALUES ('$name', '$username', '$password', '$cinNum', '$dateOfBirth', '$placeOfBirth', '$countryOfResidence', '$poste', '$domaineActivite', '$nomClientFinal', '$nomRepresentantClient', '$mailRepresentantClient', '$posteRepresentantClient', '$dateDebutMission', '$dateFinMission', '$TJM')";
    
    $result = mysqli_query($conn, $sql);
    if($result){ 
        header('location:index.php');
        echo"<script>alert('New User Register Success');</script>";   
    }else{
        die(mysqli_error($conn));
    }
   
}
