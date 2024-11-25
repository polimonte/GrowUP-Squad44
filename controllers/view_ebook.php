<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Inclua a conexão com o banco de dados
require_once '../models/con.php'; // Certifique-se de que o caminho para o seu arquivo con.php está correto
require_once '../libs/fpdf/fpdf.php'; // Caminho para a biblioteca FPDF

// Verifique se o ID do ebook foi passado na URL
if (isset($_GET['id'])) {
    $transcriptionId = $_GET['id'];

    try {
        // Prepare a consulta SQL para recuperar o ebook pelo ID
        $sql = "SELECT * FROM transcriptions WHERE id = :id AND user_id = :user_id";
        $stmt = $pdo->prepare($sql);

        // Recupere o ID do usuário logado
        $userId = $_SESSION['id'];

        // Bind os parâmetros
        $stmt->bindParam(':id', $transcriptionId, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);

        // Execute a consulta
        $stmt->execute();

        // Verifique se o ebook foi encontrado
        $transcription = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($transcription) {
            if (isset($_GET['download']) && $_GET['download'] === 'true') {
                // Gerar o PDF e fazer o download
                $text = mb_convert_encoding($transcription['transcription_text'], 'ISO-8859-1', 'UTF-8');
                $fileName = "ebook_" . $transcriptionId . ".pdf";

                // Iniciar o PDF
                $pdf = new FPDF();
                $pdf->AddPage();

                // Definir título com fundo azul claro
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->SetFillColor(40, 139, 228); // Azul Claro
                $pdf->Cell(0, 10, 'E-book Gerado', 0, 1, 'C', true);
                $pdf->Ln(10); // Linha em branco

                // Definir o texto do corpo
                $pdf->SetFont('Arial', '', 12);

                // Dividir o texto em parágrafos e adicionar quebras de linha
                $paragraphs = explode("\n", $text); // Divide o texto em parágrafos
                foreach ($paragraphs as $paragraph) {
                    $pdf->MultiCell(0, 10, $paragraph);
                    $pdf->Ln(5); // Adiciona um espaçamento entre os parágrafos
                }

                // Enviar o PDF para download
                $pdf->Output('D', $fileName);
                exit();
            } else {
                // Exibir o conteúdo do eBook na página
                echo "<p><strong>Texto:</strong><br>" . nl2br($transcription['transcription_text']) . "</p>";
            }
        } else {
            echo "<p>Ebook não encontrado ou você não tem permissão para visualizar.</p>";
        }
    } catch (PDOException $e) {
        echo "<p>Erro ao recuperar o ebook: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>ID do ebook não fornecido.</p>";
}

?>
