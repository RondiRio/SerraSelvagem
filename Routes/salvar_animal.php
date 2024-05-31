<?php
// Conectar ao banco de dados
include_once 'DataBase/Bd.php';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $imagem = $_FILES['imagem']['name'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];
    
    // Mover a imagem para o diretório desejado
    move_uploaded_file($imagem_tmp, "imagens/$imagem");

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO animais_perigosos (nome, descricao, imagem) VALUES ('$nome', '$descricao', '$imagem')";
    if ($conexao->query($sql) === TRUE) {
        echo "Animal perigoso salvo com sucesso!";
    } else {
        echo "Erro ao salvar o animal perigoso: " . $conexao->error;
    }

    // Fechar a conexão
    $conexao->close();
}
?>
