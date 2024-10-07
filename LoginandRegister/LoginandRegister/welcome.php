<?php
session_start();
include_once('connection.php');


$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Bienvenue</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>
    .container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: gold;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkorange;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
</style>
</head>

<body>
<header>
    <?php 
    include("navbar.php");
    ?>
</header> 

<main>

<div class="container">
<h3>Bienvenue,  <span><?=$_SESSION['name'];?></span></h3>
<p>Votre Email id est : <h6><?=$_SESSION['username'];?></h6></p>
<a href="index.php" class="btn">Deconnection</a>

<p>
<button onclick="location.href='mission.php'">Ajouter une mission</button>
<button style="--color:#D37A10;--border:2px;--slant:.5em" onclick="location.href='list_virement.php'">Liste des virements</button>
<button style="--color:#1a1a1a;--slant:40px;--border:8px" onclick="location.href='view_mission.php'">Liste des missions</button>

<style>
    button {
  --border: 5px;    /* the border width */
  --slant: 0.7em;   /* control the slanted corners */
  --color: gold; /* the color */
  
  font-size: 35px;
  padding: 0.4em 1.2em;
  border: none;
  cursor: pointer;
  font-weight: bold;
  color: var(--color);
  background: 
     linear-gradient(to bottom left,var(--color)  50%,#0000 50.1%) top right,
     linear-gradient(to top   right,var(--color)  50%,#0000 50.1%) bottom left;
  background-size: calc(var(--slant) + 1.3*var(--border)) calc(var(--slant) + 1.3*var(--border));
  background-repeat: no-repeat;
  box-shadow:
    0 0 0 200px inset var(--s,#0000),
    0 0 0 var(--border) inset var(--color);
  clip-path: 
      polygon(0 0, calc(100% - var(--slant)) 0, 100% var(--slant),
              100% 100%, var(--slant) 100%,0 calc(100% - var(--slant))
             );
  transition: color var(--t,0.3s), background-size 0.3s;
}
button:focus-visible {
  outline-offset: calc(-1*var(--border));
  outline: var(--border) solid #000c;
  clip-path: none;
  background-size: 0 0;
}
button:hover,
button:active{
  background-size: 100% 100%;
  color: #fff;
  --t: 0.2s 0.1s;
}
button:active {
  --s: #0005;
  transition: none;
}



main {
  display:grid;
  grid-auto-flow:column;
  grid-gap:20px;
  place-content:center;
  margin:0;
  height:100vh;
}
</style>

</p>
</div>





  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</main>
</body>

</html>