<?php

include 'Routes/head.php';
var_dump(session_start());
if(!session_start())

if (!isset($_SESSION['loggedin'])) {
    // Sessão não está ativa, redirecione para a página de login
    header("Location: index.php");
    exit;
} else {
    // Sessão está ativa, continue com o restante do código
    echo "A sessão está ativa.";
}
?>
<!DOCTYPE html>
<html>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'Routes/header.php' ?>
    <!-- end header section -->
  </div>



  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="heading_container">
              <h2>
                Informativo 1
              </h2>
            </div>
            <h2>Informe sobre um animal perigoso na área</h2>
    <form action="Rcoutes/salvar_animal.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome do Animal:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br>
        <label for="imagem">Imagem:</label><br>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br><br>
        <input type="submit" value="Salvar">
    </form>
          </div>
          <div class="col-md-6">
            <div class="img_container">
              <div class="img-box b1">
                <img src="imagens/about-img1.jpg" alt="" />
              </div>
            </div>

        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="imagens/location-white.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="imagens/telephone-white.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="imagens/envelope-white.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="imagens/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="imagens/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="imagens/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="imagens/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>