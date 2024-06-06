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
    <header class="header_section">
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
    </header>
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
                <img class="user-icon" src="imagens/usuario.png" alt="Foto de Perfil">
                <span class="username">Nome do Usuário</span>
              </div>
              <textarea id="post_content" name="post_content" rows="4" cols="50" required></textarea><br>
              <!-- Botão personalizado para escolher imagens -->
              <label class="custom-file-upload">
                Escolher Imagens
                <input type="file" id="post_images" name="post_images" multiple accept="image/*">
              </label>
              <div id="selected-images"></div> <!-- Div para exibir imagens selecionadas -->
              <button type="submit" class="btn btn-primary">Postar</button>
            </form>
          </div>
          <!-- Fim do Formulário para adicionar novo post -->

          <!-- Post Section 1 -->
          <div class="post" data-post-id="1">
            <!-- Conteúdo do post -->
            <div class="user-info">
              <img class="user-icon" src="imagens/usuario.png" alt="Foto de Perfil">
              <span class="username">Nome do Usuário</span>
              <button class="btn-follow btn btn-outline-success" onclick="followUser(this)">Seguir</button>
            </div>
            <p>qualquer coisa full random e fds.</p>
            <!-- Espaço para imagens -->
            <div class="post-images">
              <img src="imagens/cobra.png" alt="Imagem 1">
              <img src="imagens/cobra2.png" alt="Imagem 2">
              <!-- Adicione mais imagens aqui conforme necessário -->
            </div>
            <!-- Botões -->
            <div class="buttons">
              <button class="btn-like btn btn-outline-danger" onclick="toggleLike(this)"><i class="fas fa-heart"></i> <span class="like-count">0</span></button>
              <button class="btn-dislike btn btn-outline-secondary" onclick="toggleDislike(this)"><i class="fas fa-thumbs-down"></i> <span class="dislike-count">0</span></button>
              <button class="btn-comment btn btn-outline-primary" onclick="toggleComments(1)"><i class="fas fa-comment"></i></button>
              <button class="btn-share btn btn-outline-info" onclick="showShareLinkDialog(1)"><i class="fas fa-share"></i></button>
            </div>
            <!-- Fim dos Botões -->
            <div class="post-details">
              <div class="rating">
                <p>
                  <strong>Nível de Perigo:</strong>
                </p>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">★</span>
                <span class="star" onclick="changeDangerLevel(this)">☆</span>
                <span class="star" onclick="changeDangerLevel(this)">☆</span>
              </div>
            </div>
            <!-- Fim do Post Section 1 -->

            <!-- Seção de Comentários -->
            <div class="comments-section" id="comments-section-1" data-post-id="1" style="display: none;">
              <h3>Comentários</h3>
              <!-- Formulário para adicionar comentário -->
              <form class="comment_form" onsubmit="addComment(event)">
                <label for="comment-1">Adicionar Comentário:</label><br>
                <textarea id="comment-1" name="comment" rows="4" cols="50"></textarea><br>
                <div class="send-button">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                </div>
              </form>
            </div>
            <!-- Fim da Seção de Comentários -->
          </div>
          <!-- Fim do container de posts -->
        </div>
      </div>
    </div>
  </div>
  <!-- Fim do Main Content Area -->

  <!-- JavaScript -->
  <script>
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
      const commentTextarea = event.target.querySelector('textarea');
      const commentText = commentTextarea.value;
      if (commentText.trim() !== '') {
        const commentsContainer = event.target.closest('.comments-section');
        const newCommentDiv = document.createElement('div');
        newCommentDiv.classList.add('comment');
        newCommentDiv.innerHTML = `
          <img class="comment-user-icon" src="imagens/usuario.png" alt="Foto do Usuário">
          <p><strong>Nome do Usuário:</strong> ${commentText}</p>
        `;
        commentsContainer.appendChild(newCommentDiv);
        commentTextarea.value = '';
      } else {
        alert('Por favor, insira um comentário.');
      }
    }

    function showShareLinkDialog(postId) {
      const postURL = window.location.href + `?post=${postId}`;
      alert(`Link do Post: ${postURL}`);
    }

    function addNewPost(event) {
      event.preventDefault();
      const postContent = document.getElementById('post_content').value;
      const postImages = document.getElementById('post_images').files;

      if (postContent.trim() !== '') {
        const postsContainer = document.querySelector('.post_container');
        const postId = Date.now(); // Gera um ID único baseado no tempo
        const newPostDiv = document.createElement('div');
        newPostDiv.classList.add('post');
        newPostDiv.dataset.postId = postId; // Define o ID do post como um atributo de dados

        newPostDiv.innerHTML = `
          <div class="user-info">
            <img class="user-icon" src="imagens/usuario.png" alt="Foto de Perfil">
            <span class="username">Nome do Usuário</span>
            <button class="btn-follow btn btn-outline-success" onclick="followUser(this)">Seguir</button>
          </div>
          <p>${postContent}</p>
          <!-- Espaço para imagens -->
          <div class="post-images">
            <!-- Exibição das imagens aqui -->
          </div>
          <!-- Botões -->
          <div class="buttons">
            <button class="btn-like btn btn-outline-danger" onclick="toggleLike(this)"><i class="fas fa-heart"></i> <span class="like-count">0</span></button>
            <button class="btn-dislike btn btn-outline-secondary" onclick="toggleDislike(this)"><i class="fas fa-thumbs-down"></i> <span class="dislike-count">0</span></button>
            <button class="btn-comment btn btn-outline-primary" onclick="toggleComments(${postId})"><i class="fas fa-comment"></i></button>
            <button class="btn-share btn btn-outline-info" onclick="showShareLinkDialog(${postId})"><i class="fas fa-share"></i></button>
          </div>
          <!-- Fim dos Botões -->
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
          <div class="comments-section" id="comments-section-${postId}" data-post-id="${postId}" style="display: none;">
            <h3>Comentários</h3>
            <form class="comment_form" onsubmit="addComment(event)">
              <label for="comment-${postId}">Adicionar Comentário:</label><br>
              <textarea id="comment-${postId}" name="comment" rows="4" cols="50"></textarea><br>
              <div class="send-button">
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
              </div>
            </form>
          </div>
        `;

        const postImagesDiv = newPostDiv.querySelector('.post-images');
        Array.from(postImages).forEach(image => {
          const imageElement = document.createElement('img');
          imageElement.src = URL.createObjectURL(image);
          imageElement.alt = 'Imagem do Post';
          postImagesDiv.appendChild(imageElement);
        });

        postsContainer.appendChild(newPostDiv);
      } else {
        alert('Por favor, preencha todos os campos.');
      }
    }

    document.getElementById('post_images').addEventListener('change', function() {
      const selectedImagesDiv = document.getElementById('selected-images');
      selectedImagesDiv.innerHTML = ''; // Limpa as imagens exibidas anteriormente
      const files = this.files;
      for (let i = 0; i < files.length; i++) {
        const img = document.createElement('img');
        img.src = URL.createObjectURL(files[i]);
        img.style.maxWidth = '100px'; // Define a largura máxima da imagem
        img.style.marginRight = '10px'; // Adiciona margem entre as imagens
        selectedImagesDiv.appendChild(img);
      }
    });

    function followUser(button) {
      button.innerText = 'Seguindo';
      button.classList.remove('btn-outline-success');
      button.classList.add('btn-success');
      button.disabled = true; // Desabilita o botão após seguir
    }
  </script>

</body>

</html>
