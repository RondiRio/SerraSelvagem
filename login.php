<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script>
        if (navigator.onLine) {
            localStorage.setItem('siteData', '...');
        } else {
            var siteData = localStorage.getItem('siteData');
            if (siteData) {
                console.log('Dados do site recuperados do LocalStorage:', siteData);
            } else {
                console.log('Sem dados disponíveis no LocalStorage.');
            }
        }
    </script>
    <title>Serra Selvagem</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" /> <!-- Adicionado arquivo CSS personalizado -->
</head>
<body>

<?php include('head.php'); ?>


<div class="hero_area">
    <?php include 'Routes/header.php' ?>

    <section class="container login_section"> <!-- Adicionada classe "login_section" para estilização -->
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login_box"> <!-- Adicionada classe "login_box" para estilização -->
                    <h2>Login</h2>
                    <form action="Routes/processa_Login.php" method="post">
                        <label for="codigo">Email:</label>
                        <input type="text" id="codigo" name="codigo" required>
                        <br>
                        <br>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" required>
                        <br>
                        <input type="checkbox" id="lembrar_senha" name="lembrar_senha">
                        <label for="lembrar_senha">Lembrar minha senha</label>
                        <a href="esqueceu_senha.php">Esqueceu sua senha?</a>
                        <br>
                        <input type="submit" value="Entrar">
                    </form>
                    <p>Não tem uma conta? <a href="cadastro.html">Cadastre-se</a>.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<footer class="container-fluid footer_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
                <p></p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
