<?php
//11119006 - Bagus Susilo
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"></head>

    <link rel="stylesheet" type="text/css" href="style.css">
<body>
 <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Bagus Susilo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="index.php?page=story">Story</a>
          <a class="nav-link" href="index.php?page=about">About</a>
          <a class="nav-link" href="action-logout.php">Logout</a>
        </div>
      </div>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Welcome to my Website</h1>
        <a class="btn btn-primary tombol" href="index.php?page=story">Let's see my stories!</a>
      </div>
    </div>

      <!-- Info Panel -->
      <div class="row justify-content-center">
        <div class="col-lg-8 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="img/hiking.jpg" class="float-left">
              <h4>Hiking</h4>
              <p>All about my experience</p>
            </div>
            <div class="col-lg">
              <img src="img/tenda.jpg" class="float-left">
              <h4>Camping</h4>
              <p>All about my happines</p>
            </div>
            <div class="col-lg">
              <img src="img/travel.png" class="float-left">
              <h4>Traveling</h4>
              <p>All about my hope</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- quotes -->
      <section class="quotes">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h6>"Berjalan dan teruslah melangkah sejauh mungkin. selain akan menemukan teman baru, kita akan menemukan jati diri"</h6>
          </div>
        </div>
      </section>
</body>
</html>