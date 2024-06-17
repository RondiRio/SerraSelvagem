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

  <!-- New Meta Tags -->
  <meta name="robots" content="index, follow" />
  <meta name="theme-color" content="#000000" />

  <title>Fórum</title>

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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <!-- <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="imagens/logo.png" alt="">
            <span>
              Serra Selvagem
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Perfil</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header> -->
    <?php include('../SerraSelvagem/Routes/header.php')?>
    <!-- header section ends -->

    <!-- Main Content Area -->
    <div class="main_content">
      <div class="container">
        <!-- Divisão para o fundo branco -->
        <div class="post_container">
          <!-- Formulário para adicionar novo post -->
          <div class="add_post">
            <form class="post_form" onsubmit="addNewPost(event)">
              <div class="user-info">
                <img class="user-icon" src="imagens/usuario.jpg" alt="Foto de Perfil">
                <span class="username">Nome do Usuário</span>
              </div>
              <textarea id="post_content" name="post_content" rows="4" cols="50" required></textarea><br>
              <!-- Botão personalizado para escolher imagens -->
              <label class="custom-file-upload">
                <i class="fas fa-camera"></i>
                <input type="file" id="post_images" name="post_images" multiple accept="image/*" style="display: none;">
              </label>
              <div id="selected-images"></div> <!-- Div para exibir imagens selecionadas -->
              <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
          <!-- Fim do Formulário para adicionar novo post -->

          <!-- Post 1 -->
          <div class="post" data-post-id="1">
            <div class="user-info">
              <img class="user-icon" src="imagens/usuario1.jpg" alt="Foto de Perfil">
              <span class="username">João Silva</span>
              <button class="btn-follow not-following" onclick="followUser(this)"><i class="fas fa-user-plus"></i></button>
            </div>
            <p>Encontrei essa cobra-coral na trilha do Parque Nacional. Alguém sabe se é venenosa?</p>
            <div class="post-images">
              <img src="imagens/cobra1.jpg" alt="Cobra Coral">
            </div>
            <div class="buttons">
              <button class="btn-like btn btn-outline-danger" onclick="toggleLike(this)"><i class="fas fa-heart"></i> <span class="like-count">10</span></button>
              <button class="btn-dislike btn btn-outline-secondary" onclick="toggleDislike(this)"><i class="fas fa-thumbs-down"></i> <span class="dislike-count">2</span></button>
              <button class="btn-comment btn btn-outline-primary" onclick="toggleComments(1)"><i class="fas fa-comment"></i></button>
              <button class="btn-share-whatsapp btn btn-outline-success" onclick="shareOnWhatsApp(1)"><i class="fab fa-whatsapp"></i></button>
              <button class="btn-share btn btn-outline-info" onclick="copyShareLink(1)"><i class="fas fa-share"></i></button>
            </div>
            <div class="post-details">
              <div class="rating">
                <p><strong>Nível de Perigo:</strong></p>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">☆</span>
                <span class="star" onclick="changeDangerLevel(this)">☆</span>
              </div>
            </div>
            <div class="comments-section" id="comments-section-1" data-post-id="1" style="display: none;">
              <h3>Comentários</h3>
              <form class="comment_form" onsubmit="addComment(event)">
                <label for="comment-1">Adicionar Comentário:</label><br>
                <textarea id="comment-1" name="comment" rows="4" cols="50"></textarea><br>
                <div class="send-button">
                  <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i></button>
                </div>
              </form>
              <div class="comment">
                <img class="comment-user-icon" src="imagens/usuario2.jpg" alt="Foto do Usuário">
                <p><strong>Ana Clara:</strong> Essa espécie é venenosa, tome cuidado!</p>
              </div>
            </div>
          </div>
          <!-- Fim do Post 1 -->

          <!-- Post 2 -->
          <div class="post" data-post-id="2">
            <div class="user-info">
              <img class="user-icon" src="imagens/usuario4.jpg" alt="Foto de Perfil">
              <span class="username">Carlos Mendes</span>
              <button class="btn-follow not-following" onclick="followUser(this)"><i class="fas fa-user-plus"></i></button>
            </div>
            <p>Avistamos uma onça-pintada nas proximidades da cachoeira. Foi incrível!</p>
            <div class="post-images">
              <img src="imagens/onca.jpg" alt="Onça-pintada">
            </div>
            <div class="buttons">
              <button class="btn-like btn btn-outline-danger" onclick="toggleLike(this)"><i class="fas fa-heart"></i> <span class="like-count">25</span></button>
              <button class="btn-dislike btn btn-outline-secondary" onclick="toggleDislike(this)"><i class="fas fa-thumbs-down"></i> <span class="dislike-count">1</span></button>
              <button class="btn-comment btn btn-outline-primary" onclick="toggleComments(2)"><i class="fas fa-comment"></i></button>
              <button class="btn-share-whatsapp btn btn-outline-success" onclick="shareOnWhatsApp(2)"><i class="fab fa-whatsapp"></i></button>
              <button class="btn-share btn btn-outline-info" onclick="copyShareLink(2)"><i class="fas fa-share"></i></button>
            </div>
            <div class="post-details">
              <div class="rating">
                <p><strong>Nível de Perigo:</strong></p>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">☆</span>
                <span class="star" onclick="changeDangerLevel(this)">☆</span>
              </div>
            </div>
            <div class="comments-section" id="comments-section-2" data-post-id="2" style="display: none;">
              <h3>Comentários</h3>
              <form class="comment_form" onsubmit="addComment(event)">
                <label for="comment-2">Adicionar Comentário:</label><br>
                <textarea id="comment-2" name="comment" rows="4" cols="50"></textarea><br>
                <div class="send-button">
                  <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i></button>
                </div>
              </form>
              <div class="comment">
                <img class="comment-user-icon" src="imagens/usuario5.jpg" alt="Foto do Usuário">
                <p><strong>Lucas Souza:</strong> Impressionante! Devem ter ficado maravilhados com o avistamento.</p>
              </div>
            </div>
          </div>
          <!-- Fim do Post 2 -->
        </div>
      </div>
    </div>
    <!-- Main Content Area ends -->
  </div>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Todos os Direitos Reservados
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>

  <script>
    function addNewPost(event) {
      event.preventDefault();
      const postContent = document.getElementById('post_content').value;
      const postImages = document.getElementById('post_images').files;
      if (postContent.trim() === '') {
        alert('Por favor, escreva algo no seu post.');
        return;
      }

      const postContainer = document.querySelector('.post_container');
      const newPostId = new Date().getTime();

      let postHtml = `
        <div class="post" data-post-id="${newPostId}">
          <div class="user-info">
            <img class="user-icon" src="imagens/usuario.jpg" alt="Foto de Perfil">
            <span class="username">Nome do Usuário</span>
            <button class="btn-follow not-following" onclick="followUser(this)"><i class="fas fa-user-plus"></i></button>
          </div>
          <p>${postContent}</p>
          <div class="post-images">`;

      if (postImages.length > 0) {
        for (let i = 0; i < postImages.length; i++) {
          const imageUrl = URL.createObjectURL(postImages[i]);
          postHtml += `<img src="${imageUrl}" alt="Imagem do Post">`;
        }
      }

      postHtml += `
          </div>
          <div class="buttons">
            <button class="btn-like btn btn-outline-danger" onclick="toggleLike(this)"><i class="fas fa-heart"></i> <span class="like-count">0</span></button>
            <button class="btn-dislike btn btn-outline-secondary" onclick="toggleDislike(this)"><i class="fas fa-thumbs-down"></i> <span class="dislike-count">0</span></button>
            <button class="btn-comment btn btn-outline-primary" onclick="toggleComments(${newPostId})"><i class="fas fa-comment"></i></button>
            <button class="btn-share-whatsapp btn btn-outline-success" onclick="shareOnWhatsApp(${newPostId})"><i class="fab fa-whatsapp"></i></button>
            <button class="btn-share btn btn-outline-info" onclick="copyShareLink(${newPostId})"><i class="fas fa-share"></i></button>
          </div>
          <div class="post-details">
            <div class="rating">
              <p><strong>Nível de Perigo:</strong></p>
              <span class="star" onclick="changeDangerLevel(this)">★</span>
              <span class="star" onclick="changeDangerLevel(this)">★</span>
              <span class="star" onclick="changeDangerLevel(this)">★</span>
              <span class="star" onclick="changeDangerLevel(this)">☆</span>
              <span class="star" onclick="changeDangerLevel(this)">☆</span>
            </div>
          </div>
          <div class="comments-section" id="comments-section-${newPostId}" data-post-id="${newPostId}" style="display: none;">
            <h3>Comentários</h3>
            <form class="comment_form" onsubmit="addComment(event)">
              <label for="comment-${newPostId}">Adicionar Comentário:</label><br>
              <textarea id="comment-${newPostId}" name="comment" rows="4" cols="50"></textarea><br>
              <div class="send-button">
                <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i></button>
              </div>
            </form>
          </div>
        </div>
      `;

      postContainer.insertAdjacentHTML('beforeend', postHtml); // Adiciona ao final
      document.getElementById('post_content').value = '';
      document.getElementById('post_images').value = '';
      document.getElementById('selected-images').innerHTML = '';
    }

    function toggleLike(button) {
      const likeCountSpan = button.querySelector('.like-count');
      let likeCount = parseInt(likeCountSpan.innerText);
      if (button.classList.contains('liked')) {
        likeCount--;
        button.classList.remove('liked');
      } else {
        likeCount++;
        button.classList.add('liked');
      }
      likeCountSpan.innerText = likeCount;
    }

    function toggleDislike(button) {
      const dislikeCountSpan = button.querySelector('.dislike-count');
      let dislikeCount = parseInt(dislikeCountSpan.innerText);
      if (button.classList.contains('disliked')) {
        dislikeCount--;
        button.classList.remove('disliked');
      } else {
        dislikeCount++;
        button.classList.add('disliked');
      }
      dislikeCountSpan.innerText = dislikeCount;
    }

    function followUser(button) {
      if (button.classList.contains('not-following')) {
        button.classList.remove('not-following');
        button.classList.add('following');
        button.innerHTML = '<i class="fas fa-user-check"></i>';
      } else {
        button.classList.remove('following');
        button.classList.add('not-following');
        button.innerHTML = '<i class="fas fa-user-plus"></i>';
      }
    }

    function toggleComments(postId) {
      const commentsSection = document.getElementById(`comments-section-${postId}`);
      if (commentsSection.style.display === 'none') {
        commentsSection.style.display = 'block';
      } else {
        commentsSection.style.display = 'none';
      }
    }

    function addComment(event) {
      event.preventDefault();
      const form = event.target;
      const postId = form.closest('.comments-section').dataset.postId;
      const textarea = form.querySelector('textarea');
      const commentText = textarea.value.trim();
      if (commentText === '') {
        alert('Por favor, escreva um comentário.');
        return;
      }

      const commentHtml = `
        <div class="comment">
          <img class="comment-user-icon" src="imagens/usuario.jpg" alt="Foto do Usuário">
          <p><strong>Nome do Usuário:</strong> ${commentText}</p>
        </div>
      `;
      form.insertAdjacentHTML('afterend', commentHtml);
      textarea.value = '';
    }

    function changeDangerLevel(star) {
      const stars = star.parentNode.querySelectorAll('.star');
      let selectedIndex = Array.from(stars).indexOf(star);
      stars.forEach((s, index) => {
        if (index <= selectedIndex) {
          s.innerText = '★';
        } else {
          s.innerText = '☆';
        }
      });
    }

    function shareOnWhatsApp(postId) {
      const postUrl = `${window.location.href}?post=${postId}`;
      const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(postUrl)}`;
      window.open(whatsappUrl, '_blank');
    }

    function copyShareLink(postId) {
      const shareUrl = `${window.location.href}?post=${postId}`;
      const dummyInput = document.createElement('input');
      document.body.appendChild(dummyInput);
      dummyInput.value = shareUrl;
      dummyInput.select();
      document.execCommand('copy');
      document.body.removeChild(dummyInput);
      alert('Link copiado para a área de transferência!');
    }

    document.getElementById('post_images').addEventListener('change', function () {
      const selectedImagesDiv = document.getElementById('selected-images');
      selectedImagesDiv.innerHTML = '';
      const files = this.files;
      for (let i = 0; i < files.length; i++) {
        const imageUrl = URL.createObjectURL(files[i]);
        const imgElement = document.createElement('img');
        imgElement.src = imageUrl;
        selectedImagesDiv.appendChild(imgElement);
      }
    });
  </script>
</body>

</html>
