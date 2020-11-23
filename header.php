<!DOCTYPE html>
<html lang="sr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css" />
    <!-- owl -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <title>Advokatska kancelarija Dobrosavljev</title>
  </head>
  <body>


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <h1 class="navbar-brand text-uppercase text-center">
        <a href="">
          Advokatska kancelarija<br /><span
            >Dobrosavlje<span class="noSpace">v</span>
          </span></a
        >
      </h1>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
          <ul class="navbar-nav mx-auto">
            <li class="nav-item <?php if($page=='home'){ echo 'active';} ?>">
              <a class="nav-link " href="index.php">Poslovanje</a>
            </li>
            <li class="nav-item <?php if($page=='advokati'){ echo 'active';} ?>">
              <a class="nav-link " href="advokati.php">Advokati</a>
            </li>
            <li class="nav-item <?php if($page=='kontakt'){ echo 'active';} ?>">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
          </ul>
          <a class="nav-item nav-link pozovi text-right" href="#">Pozovite nas<i class="ml-1 fas fa-phone"></i> </a>
          <p class="tel text-center">062/111-000</p>
        <!-- <form class="form-inline my-2 my-lg-0 ">
          
          <button type="button" class="nav-link nav-item icon"><i class="fas fa-search"></i></button>
        </form> -->
     
      </div>
    </nav>
 