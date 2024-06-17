<?php
include 'Routes/head.php';
print_r($_POST);
print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script>
// Verifica se o navegador está online
if (navigator.onLine) {
    // Se estiver online, armazena os dados no LocalStorage
    localStorage.setItem('siteData', '...'); // Seus dados aqui
} else {
    // Se estiver offline, recupera os dados do LocalStorage
    var siteData = localStorage.getItem('siteData');
    if (siteData) {
        // Use os dados do LocalStorage para carregar o site
        // Por exemplo, você pode exibir uma mensagem ou restaurar o estado anterior do site
        console.log('Dados do site recuperados do LocalStorage:', siteData);
    } else {
        console.log('Sem dados disponíveis no LocalStorage.');
    }
}

  </script>
  <title>Serra Selvagem</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- Header section -->
    <?php include 'Routes/header.php' ?>
    <!-- End header section -->
  </div>

  <!-- Profile creation and login section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 profile_creation">
          <div class="heading_container">
            <h2>Cadastro</h2>
          </div>
          <form id="profile_form" method="post" action="Routes/processa_cadastro.php" onsubmit="return verificarSenhas()">
            <div>
                <input type="text" placeholder="Nome Completo" class="form-control" name="nome" id="nome" />
            </div>
            <div>
                <input type="email" placeholder="Email" class="form-control" name="email" />
            </div>
            <div>
                <input type="password" placeholder="Senha" class="form-control" name="senha" id="senha" />
            </div>
            <div>
                <input type="password" placeholder="Confirmar Senha" class="form-control" name="confirmar_senha" id="confirmar_senha" />
            </div>
            <div>
                <input type="date" placeholder="Data de Nascimento" class="form-control" name="data_nascimento" />
            </div>
            <div>
                <label for="genero">Gênero:</label>
                <select name="genero" id="genero" class="form-control">
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
                  <option value="outro">Outro</option>
                </select>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-cadastro">Cadastrar</button>
            </div>
          </form>    
        </div>
      </div>
    </div>
  </section>
  <!-- End profile creation and login section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/main.js"></script>

<script>
    function verificarSenhas() {
        var senha = document.getElementById("senha").value;
        var confirmarSenha = document.getElementById("confirmar_senha").value;

        if (senha !== confirmarSenha) {
            alert("As senhas não são iguais.");
            return false; // Impede o envio do formulário
        }
        return true; // Permite o envio do formulário
    }
</script>

</body>

</html>
