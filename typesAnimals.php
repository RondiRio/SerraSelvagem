<?php
session_start();
include_once('Routes/DataBase/Bd.php');
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM especies_animais";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .animal-image {
      border-radius: 50%;
    }
  </style>
</head>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'Routes/header.php' ?>
    <!-- end header section -->
  </div>

  <section class="animal_table_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Lista de Espécies Animais</h2>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Imagem</th> <!-- Nova coluna para a imagem -->
                    <th>Nome Científico</th>
                    <th>Descrição</th>
                    <th>Tipo de Alimentação</th>
                    <th>Hábitat</th>
                    <th>Comportamento</th>
                    <th>Nome Comum</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <tr>
                      <td><img src="<?php echo $row['foto']; ?>" class="animal-image" width="100" height="100"></td> <!-- Exibindo a imagem com a classe "animal-image" -->
                      <td><?php echo $row['nome_cientifico']; ?></td>
                      <td><?php echo $row['descricao']; ?></td>
                      <td><?php echo $row['habitos_alimentares']; ?></td>
                      <td><?php echo $row['areas_habitat']; ?></td>
                      <td><?php echo $row['comportamento']; ?></td>
                      <td><?php echo $row['nome']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>
</html>
