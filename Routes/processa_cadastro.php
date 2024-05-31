<?php
session_start();
include_once('DataBase/Bd.php');

// Verifica se a conexão está sendo feita corretamente
var_dump($conn);
echo '<pre>';
print_r($_POST);
echo '</pre>';
if($_POST['senha'] != $_POST['confirmar_senha']){
    header('Location: ../cadastro.php');
}
// Verifica se a senha está definida corretamente
echo $password;

// Exibe uma mensagem para confirmar que estamos fora da rotina de conexão
echo 'fora da rotina';

echo 'dentro da rotina';
    
// Conexão com o banco de dados
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

$erroEmail = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_completo'];
    $email = $_POST["email"];
    $senha = $_POST['senha'];

    // Verifica se o email já está cadastrado
    $emailVerificaQuery = "SELECT * FROM usuarios WHERE email = ?";
    $emailVerificaStmt = $conn->prepare($emailVerificaQuery);
    $emailVerificaStmt->bind_param("s", $email);
    $emailVerificaStmt->execute();
    $emailVerificaResult = $emailVerificaStmt->get_result();
    
    if ($emailVerificaResult->num_rows > 0) {
        $erroEmail = true;
        // Email já cadastrado, mostra erro
        echo "<script>alert('Este email já está cadastrado!'); </script>";
    }

    $emailVerificaStmt->close();

    if (!$erroEmail) {
        // Criptografar a senha antes de inseri-la no banco de dados
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Continuar com o processamento normal do cadastro
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $nome, $email, $senhaCriptografada);
        $stmt->execute();
        // header('Location: login.php');
        $stmt->close();
       
    } else {
        // Erro ao cadastrar usuário
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

}
?>
