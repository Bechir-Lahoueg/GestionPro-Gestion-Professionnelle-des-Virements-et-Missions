<?php
session_start();
include_once('connection.php');

if (isset($_POST['login'])) {

    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM `rh` WHERE `mail`='$mail' AND `pwd`='$pwd'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['mail']) && empty($_POST['pwd'])) {
        echo "<script>alert('Please Fill mail and Password');</script>";
        exit;
    } elseif (empty($_POST['pwd'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['mail'])) {
        echo "<script>alert('Please Fill e_mail);</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $mail = $row['mail'];
            $pwd = $row['pwd'];


            if ($mail == $mail && $pwd == $pwd) {
                $_SESSION['mail'] = $mail;
                $_SESSION['pwd'] = $pwd;
                header('location:welcomeRH.php');
            }
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            exit;
        }
    }

}

?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="login.png" class="img-fluid" alt="Phone image" height="300px" width="600px">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

          <form method="post">
            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Se connecter as RH</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> E_mail</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="mail" autocomplete="off" placeholder="Entrer votre e-mail" style="border-radius:25px ;" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Mot de passe</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="pwd" autocomplete="off" placeholder="Entrer Votre Mot de passe" style="border-radius:25px ;" />

            </div>


            <!-- Submit button -->
            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <input type="submit" value="Se connecter" name="login" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
            </div>

          </form><br>
          <p align="center">Je suis un <a href="admin_dash.php" class="text-warning" style="font-weight:600;text-decoration:none;">Admin ?</a></p>
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