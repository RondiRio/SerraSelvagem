<?php
include('head.php');

?>
<header class="header_section">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light custom_nav-container">
      <a class="navbar-brand" href="index.html">
        <img src="imagens/logo.png" alt="">
        <span>
          Serra Selvagem
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-color">
          <li class="nav-item active">
            <a class="nav-link text-color" href="index.php">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-color" href="about.php"> Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-color" href="typesAnimals.php"> Especies</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-color" href="forum.php">Central de Ataques </a>
          </li>
          <li class="nav-item">
            <?php if (!isset($_SESSION['id'])) { ?>
              <a class="nav-link text-color" href="login.php">Entrar</a>
            <?php } ?>
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION['id'])) { ?>
              <a class="nav-link text-color" href="logout.php">Sair</a>
            <?php } ?>
          </li>


        </ul>
      </div>
    </nav>
  </div>
</header>