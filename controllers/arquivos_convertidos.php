<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Inclua a conexão com o banco de dados
require_once '../models/con.php';  // Certifique-se de que o caminho para o seu arquivo con.php está correto

// Recupere o id do usuário logado
$userId = $_SESSION['id'];

try {
    // Prepare a consulta SQL para recuperar as transcrições do usuário
    $sql = "SELECT * FROM transcriptions WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);

    // Bind o parâmetro do id do usuário
    $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);

    // Execute a consulta
    $stmt->execute();

    // Recupere todas as transcrições
    $transcriptions = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Caso haja um erro na consulta
    echo "<p>Erro ao recuperar as transcrições: " . $e->getMessage() . "</p>";
}

require_once '../views/arquivos_convertidos.php';
?>
