<?php
session_start();
include_once('DataBase/Bd.php');
echo '<pre>';
print_r($_POST);
// Verifica se a conexão está sendo feita corretamente
var_dump($conn);
echo '</pre>';
// Verifica se a senha está definida corretamente
echo $password;

// Exibe uma mensagem para confirmar que estamos fora da rotina de conexão
echo 'fora da rotina';

try {
    echo 'dentro da rotina';
    
    // Conexão com o banco de dados
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
    if ($conn->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["codigo"];
        $senha = $_POST["senha"];

        // Consulta SQL para obter a senha hash do usuário
       $query = "SELECT id, senha FROM usuarios WHERE email = ?";
echo "Consulta SQL: $query";
$stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $senha_hash);
            $stmt->fetch();
            
            if (password_verify($senha, $senha_hash)) {
                $_SESSION["usuario_logado"] = true;
                $_SESSION["id"] = $id;
                // Redirecionamento para radio.php
                header("Location: ../index.php");
                exit;
            } else {
                echo "Senha fornecida pelo usuário: $senha <br>";
echo "Hash da senha armazenado no banco de dados: $senha_hash";

               echo '
               <div>
               <h1>Senha incorreta</h1>
               clique <a href="../login.php">aqui </a>para tentar novamente.
                </div>
               ';
                exit;
            }
        } else {
            // Redirecionamento para index.php com parâmetro de erro
            // header("Location: index.php?login=erro");
            echo 'Usuário não encontrado';
            exit;
        }
    }
} catch (Exception $e) {
    echo "Ocorreu um erro: " . $e->getMessage();
}

// Fechar a conexão após o uso
if (isset($conn)) {
    $conn->close();
}
?>
