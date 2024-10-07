<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Inscription</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <!-- nom -->
                  <form class="mx-1 mx-md-4" action="add.php" method="post">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Votre Nom Complet</label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="Entrez votre nom" style="border-radius:25px ;" />

                      </div>

                    </div>

                    <!-- mail -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Votre Email</label>
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="Entrez votre Email" style="border-radius:25px ;" />

                      </div>
                    </div>

                    <!-- password -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Mot de passe</label>
                        <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="Entrez votre Mot de passe" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <p style="color: rgb(29, 215, 48); font-family: verdana;">Veuillez remplir vos donnée personnelle !</p>

                    <!-- cin -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formCIN"><i class="bi bi-card-list"></i> Num CIN</label>
                        <input type="text" id="formCIN" class="form-control form-control-lg py-3" name="cin_num" required placeholder="Entrez votre Num CIN" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- birth date -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formDateOfBirth"><i class="bi bi-calendar3"></i> Date de naissance</label>
                        <input type="date" id="formDateOfBirth" class="form-control form-control-lg py-3" name="date_de_naissance" required style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- lieu de naissance -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formLieuDeNaissance"><i class="bi bi-geo-alt"></i> Lieu de Naissance:</label>
                        <input type="text" id="formLieuDeNaissance" class="form-control form-control-lg py-3" name="lieu_de_naissance" required placeholder="Entrez votre lieu de naissance" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- pays de naissance -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formPaysDeResidence"><i class="bi bi-globe2"></i> Pays de Résidence:</label>
                        <input type="text" id="formPaysDeResidence" class="form-control form-control-lg py-3" name="pays_de_residence" required placeholder="Entrez votre Pays de Résidence" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- form 3 -->
                    <p style="color: rgb(29, 215, 48); font-family: verdana;">Veuillez remplir Les informations de votre première mission !</p>

                    <!-- poste name -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formPoste"><i class="bi bi-person"></i> Poste:</label>
                        <input type="text" id="formPoste" class="form-control form-control-lg py-3" name="poste" autocomplete="off" placeholder="Entrer votre poste" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Domaine d'Activité -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formDomaineActivite"><i class="bi bi-tools"></i> Domaine d'Activité:</label>
                        <input type="text" id="formDomaineActivite" class="form-control form-control-lg py-3" name="domaine_activite" autocomplete="off" placeholder="Entrer votre Domaine d'Activité" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Nom du Client Final -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formNomClientFinal"><i class="bi bi-person-badge"></i> Nom du Client Final:</label>
                        <input type="text" id="formNomClientFinal" class="form-control form-control-lg py-3" name="nom_client_final" autocomplete="off" placeholder="Entrer le Nom du Client Final" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Nom du Représentant du Client -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formNomRepresentantClient"><i class="bi bi-person-check"></i> Nom du Représentant du Client:</label>
                        <input type="text" id="formNomRepresentantClient" class="form-control form-control-lg py-3" name="nom_representant_client" autocomplete="off" placeholder="Entrer le Nom du Représentant du Client" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Mail du Représentant du Client -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formMailRepresentantClient"><i class="bi bi-envelope"></i> Mail du Représentant du Client:</label>
                        <input type="email" id="formMailRepresentantClient" class="form-control form-control-lg py-3" name="mail_representant_client" autocomplete="off" placeholder="Entrer l'email du Représentant du Client" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Poste du Représentant du Client -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formPosteRepresentantClient"><i class="bi bi-person-lines-fill"></i> Poste du Représentant du Client:</label>
                        <input type="text" id="formPosteRepresentantClient" class="form-control form-control-lg py-3" name="poste_representant_client" autocomplete="off" placeholder="Entrer la Poste du Représentant du Client" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Date de Début de la Mission -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formDateDebutMission"><i class="bi bi-calendar2-check-fill"></i> Date de Début de la Mission:</label>
                        <input type="date" id="formDateDebutMission" class="form-control form-control-lg py-3" name="date_de_debut_mission" required style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Date de Fin de la Mission -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formDateFinMission"><i class="bi bi-calendar2-x-fill"></i> Date de Fin de la Mission:</label>
                        <input type="date" id="formDateFinMission" class="form-control form-control-lg py-3" name="date_de_fin_mission" required style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- TJM -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formTJM"><i class="bi bi-currency-euro"></i> Taux Journalier Moyen (TJM):</label>
                        <input type="number" id="formTJM" class="form-control form-control-lg py-3" name="tjm" required placeholder="TJM" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <p style="color: rgb(29, 215, 48); font-family: verdana;">Veuillez remplir les données avec soin !</p>
                    <!-- Copie du CIN -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formCopieCIN"><i class="bi bi-file-earmark-text"></i> Copie du CIN:</label>
                        <input type="file" id="formCopieCIN" class="form-control form-control-lg py-3" name="copie_cin" accept=".pdf, image/*" required style="border-radius:25px ;" />
                      </div>
                    </div>

                    <!-- Copie du Permis de Conduire -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formCopiePermis"><i class="bi bi-file-earmark-text"></i> Copie du Permis de Conduire:</label>
                        <input type="file" id="formCopiePermis" class="form-control form-control-lg py-3" name="copie_permis" accept=".pdf, image/*" required style="border-radius:25px ;" />
                      </div>
                    </div>


                    <!-- Fichier de Simulation (PDF) -->
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="formFichierSimulation"><i class="bi bi-file-earmark-pdf"></i> Fichier de Simulation (PDF):</label>
                        <input type="file" id="formFichierSimulation" class="form-control form-control-lg py-3" name="fichier_simulation" accept=".pdf" required style="border-radius:25px ;" />
                      </div>
                    </div>


                    <!-- bouton -->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" value="Register" name="register" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
                    </div>
                  </form>
                  <p align="center">Vous avez déjà un compte ? <a href="index.php" class="text-warning" style="font-weight:600; text-decoration:none;">Login</a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="signup.png" class="img-fluid" alt="Sample image" height="300px" width="500px">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>