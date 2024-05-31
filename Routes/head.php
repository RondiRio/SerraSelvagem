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
        conesole.log('Dados do site recuperados do LocalStorage:', siteData);
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
