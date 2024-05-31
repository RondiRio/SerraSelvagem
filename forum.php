<?php

include 'Routes/head.php'

?>
<!DOCTYPE html>
<html>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'Routes/header.php' ?>
    <!-- header section ends -->

    <!-- Main Content Area -->
    <div class="main_content">
      <div class="container">
        <!-- Divisão para o fundo branco -->
        <div class="post_container">
          <!-- Formulário para adicionar novo post -->
          <div class="add_post">
            <form class="post_form" onsubmit="addNewPost(event)">
              <h2>Adicionar Novo Post</h2>
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
              <button type="submit" class="btn btn-primary">Publicar</button>
            </form>
          </div>

          <!-- Fim do Formulário para adicionar novo post -->

          <!-- Post Section 1 -->
          <div class="post">
            <!-- Conteúdo do post -->
            <div class="user-info">
              <img class="user-icon" src="imagens/usuario.png" alt="Foto de Perfil">
              <span class="username">Nome do Usuário</span>
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
              <button class="btn-like btn btn-outline-danger" onclick="increaseLikes()"><i class="fas fa-heart"></i> <span id="like-count">0</span></button>
              <button class="btn-comment btn btn-outline-primary" onclick="toggleComments()"><i class="fas fa-comment"></i></button>
              <button class="btn-share btn btn-outline-info" onclick="showShareLinkDialog()"><i class="fas fa-share"></i></button>
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
          </div>
          <!-- Fim do Post Section 1 -->

          <!-- Seção de Comentários -->
          <div class="comments-section" id="comments-section" style="display: none;">
            <h3>Comentários</h3>
            <!-- Formulário para adicionar comentário -->
            <form class="comment_form" onsubmit="addComment(event)">
              <label for="comment">Adicionar Comentário:</label><br>
              <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
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
    <!-- Fim do Main Content Area -->
  </div>

  <!-- JavaScript -->
  <script>
    let likeCount = 0;
    let likeClicked = false;
    let dangerLevel = 3; // Altere o valor inicial conforme necessário
    let dangerClicked = false;

    function increaseLikes() {
      const likeButton = document.querySelector('.btn-like');
      if (!likeClicked) {
        likeCount++;
        likeClicked = true;
        likeButton.classList.add('liked');
      } else {
        likeCount--;
        likeClicked = false;
        likeButton.classList.remove('liked');
      }
      document.getElementById("like-count").innerText = likeCount;
    }

    function changeDangerLevel(star) {
      // Obtém todas as estrelas
      const stars = document.querySelectorAll('.star');
      // Encontra a posição da estrela clicada
      const clickedIndex = Array.from(stars).indexOf(star);

      // Atualiza o nível de perigo e as estrelas
      for (let i = 0; i < stars.length; i++) {
        if (i <= clickedIndex) {
          // Marca estrelas à esquerda e na posição clicada
          stars[i].innerText = '★';
        } else {
          // Desmarca estrelas à direita
          stars[i].innerText = '☆';
        }
      }

      // Atualiza o nível de perigo
      dangerLevel = clickedIndex + 1;
    }

    function addComment(event) {
      event.preventDefault();
      const commentTextarea = document.getElementById('comment');
      const commentText = commentTextarea.value;
      if (commentText.trim() !== '') {
        const commentsContainer = document.querySelector('.comments-section');
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

    function toggleComments() {
      const commentsSection = document.getElementById('comments-section');
      if (commentsSection.style.display === 'none') {
        commentsSection.style.display = 'block';
      } else {
        commentsSection.style.display = 'none';
      }
    }

    function showShareLinkDialog() {
      const postURL = window.location.href;
      alert(`Link do Post: ${postURL}`);
    }

    function addNewPost(event) {
      event.preventDefault();
      const postTitle = document.getElementById('post_title').value;
      const postContent = document.getElementById('post_content').value;
      const postImages = document.getElementById('post_images').files;

      if (postTitle.trim() !== '' && postContent.trim() !== '') {
        const postsContainer = document.querySelector('.post_container');
        const newPostDiv = document.createElement('div');
        newPostDiv.classList.add('post');
        newPostDiv.innerHTML = `
          <div class="user-info">
            <img class="user-icon" src="imagens/usuario.png" alt="Foto de Perfil">
            <span class="username">Nome do Usuário</span>
          </div>
          <p>${postContent}</p>
          <!-- Espaço para imagens -->
          <div class="post-images">
            <!-- Exibição das imagens aqui -->
          </div>
          <!-- Botões -->
          <div class="buttons">
            <button class="btn-like btn btn-outline-danger" onclick="increaseLikes()"><i class="fas fa-heart"></i> <span id="like-count">0</span></button>
            <button class="btn-comment btn btn-outline-primary" onclick="toggleComments()"><i class="fas fa-comment"></i></button>
            <button class="btn-share btn btn-outline-info" onclick="showShareLinkDialog()"><i class="fas fa-share"></i></button>
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
    var _kwp = {'conta':17173, 'host': 'https://widget.karoo.com.br/home', 'color': '23272a' };
    (function (d, t) {
       var k = d.createElement(t), s = d.getElementsByTagName(t)[0];
       k.src = 'https://widget.karoo.com.br/api/embedded.js';
       s.parentNode.insertBefore(k, s)
    }(document, 'script'));

  </script>


</body>

</html>