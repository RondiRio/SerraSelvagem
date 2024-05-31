<?php
// Definir credenciais como constantes
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u602544677_serraSelvagem');
define('DB_PASSWORD', 'Serra123!@#');
define('DB_DATABASE', 'u602544677_SerraSelvagem');

// Conectar ao banco de dados
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão com o banco de dados.");
}

// // Exemplo de consulta usando um Prepared Statement
// $query = "SELECT * FROM usuarios WHERE email = ?";
// $stmt = mysqli_prepare($conn, $query);
// mysqli_stmt_bind_param($stmt, "s", $valor);
// $valor = "algum_valor";
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);

// // Processar resultados...

// Fechar a conexão após o uso
mysqli_close($conn);
?>
