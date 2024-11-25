<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Inclua a conexão com o banco de dados
require_once '../models/con.php';  // Certifique-se de que o caminho para o seu arquivo con.php está correto

// Verifique se a solicitação é um POST válido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receba os dados em formato JSON
    $data = json_decode(file_get_contents('php://input'), true);
    
    $userId = $data['user_id'];
    $transcriptionText = $data['transcription_text'];

    try {
        // Prepare a consulta SQL para inserir a transcrição no histórico do usuário
        $sql = "INSERT INTO transcriptions (user_id, transcription_text) VALUES (:user_id, :transcription_text)";
        $stmt = $pdo->prepare($sql);

        // Bind os parâmetros
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':transcription_text', $transcriptionText, PDO::PARAM_STR);

        // Execute a consulta
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Transcrição salva com sucesso']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao salvar a transcrição']);
        }
    } catch (PDOException $e) {
        // Em caso de erro na execução da consulta
        echo json_encode(['status' => 'error', 'message' => 'Erro ao salvar a transcrição: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método não permitido']);
}
?>
