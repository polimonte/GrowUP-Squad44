<!DOCTYPE html>
<html lang="pt-br" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Even3</title>

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon-even3.png" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="../assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="../assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">

    <!-- Auto Complete CSS -->
    <link rel="stylesheet" href="../assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<!-- Dropzone Css -->
<link rel="stylesheet" href="../assets/libs/dropzone/dropzone.css">
</head>

<body>
    <div id="loader" >
        <img src="../assets/images/media/loader.svg" alt="">
    </div>

    <div class="page">
         <!-- app-header -->
            <header style="background-color: #288BE4;">
                    <div>
                        <a href="evenAI.html" class="header-logo">
                            <img src="../assets/logomarca/logo-even3-light.svg" alt="logo" style="width: 120px; height: auto;" class="desktop-logo ms-4 p-3">
                        </a>
                    </div>
            </header>
        <!-- /app-header -->


            <!-- Start::app-content -->
            <div class="main-content">
                <div class="container">

                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Even3 AI</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Converta palestras em e-book</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Even3 AI</h1>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div>
                        <div class="col-xxl-12">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                                            <div class="flex-fill">
                                                <h6 class="fw-medium mb-0">Gerenciador</h6>
                                            </div>
                                        </div>
                                        <div class="card-body"> 
                                            <ul class="list-unstyled files-main-nav" id="files-main-nav">
                                                <li class="px-0 pt-0">
                                                    <span class="fs-12 text-muted">Meus e-books</span>
                                                </li>
                                                <li class="active files-type">
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                              <i class="ri-swap-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Converter arquivos
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="files-type">
                                                    <a href="arquivos_convertidos.php">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                              <i class="ri-folder-2-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                               Todos arquivos convertidos
                                                            </span>
                                                            <span class="badge bg-primary1">02</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="logout.php">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-logout-box-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Sair
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 card card-body">
                                    <div> 
                                        <ul class="list-unstyled files-main-nav" id="files-main-nav">
                                            <div class="flex-fill mb-3">
                                                <h6 class="fw-medium">Selecione o arquivo para conversão</h6>
                                            </div>
                                            <li class="p-3 border">
                                                <label class="form-label">Arraste e solte o arquivo :</label> 
                                                <!-- <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone bg-primary-transparent"></form> -->
                                                    <form id="audioForm" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <input type="file" name="audioFile" id="audioFile" accept="audio/*" required />
                                                        </div>      
                                            </li>
                                                <button type="submit" class="btn btn-primary btn-loader mt-3">
                                                    <span class="me-2">Converter</span>
                                                    <span class="loading" style="display: none;"><i class="ri-loader-4-line fs-16"></i></span>
                                                </button>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-start gap-3">
                                        <div>
                                            <span class="avatar avatar-md bg-secondary-transparent">
                                                <i class="ri-hard-drive-2-fill fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="mt-2"> <h6>Áudio convertido em E-book :</h>
                                               <div style="display: none;" id="transcriptionResult" class="mt-3"></div>
                                               <button id="downloadPdf" class="btn btn-primary mt-3" style="display: none;">Baixar PDF</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

            <!-- dropfile -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                <div class="offcanvas-body p-0">
                <div class="selected-file-details">
                        <div class="filemanager-file-details" id="filemanager-file-details">
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div>
                                            <span class="fw-medium">File Format : </span><span class="fs-12 text-muted">jpeg</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div>
                                            <p class="fw-medium mb-0">File Description : </p>
                                            <span class="fs-12 text-muted">This file contains 3 folder Xintra.main & Xintra.premium & Xintra.featured and 42 images and layout styles are added in this update.</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fw-medium mb-0">File Location : </p>
                                        <span class="fs-12 text-muted">Device/Storage/Archives/IMG-09123878-SPK734.jpeg</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <p class="mb-1 fw-medium fs-14">Downloaded from :</p>
                                <a class="text-primary fw-medium text-break" href="https://themeforest.net/user/spruko/portfolio" target="_blank">
                                    <u>https://themeforest.net/user/spruko/portfolio</u>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::dropfile -->


            <!-- Footer Start -->
            <footer class="footer mt-auto py-3 bg-white text-center">
                <div class="container">
                    <span class="text-muted"> Copyright © <span id="year"></span> <a
                            href="javascript:void(0);" class="text-dark fw-medium">Squad 44 Unit</a>.
                       All
                        rights
                        reserved
                    </span>
                </div>
            </footer>
                <!-- Footer End -->


</div>

        
<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<script>

function showLoader(button) {
    const loadingIcon = button.querySelector('.loading');
    loadingIcon.style.display = 'inline-block';
    button.disabled = true;
}

function hideLoader(button) {
    const loadingIcon = button.querySelector('.loading');
    loadingIcon.style.display = 'none';
    button.disabled = false;
}

  // Função para verificar e exibir o botão apenas se houver texto
  function toggleDownloadButton() {
        const transcriptionText = document.getElementById('transcriptionResult').innerText.trim();
        const downloadButton = document.getElementById('downloadPdf');

        if (transcriptionText) {
            downloadButton.style.display = 'block';
        } else {
            downloadButton.style.display = 'none';
        }
    }

    document.getElementById('downloadPdf').addEventListener('click', function () {
    const transcriptionText = document.getElementById('transcriptionResult').innerText.trim();

    if (!transcriptionText) {
        alert('Nada para baixar!');
        return;
    }

    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Título com fundo azul claro ajustado
    const margin = 10; // Margem padrão
    const pageWidth = doc.internal.pageSize.width; // Largura da página
    const titleHeight = 15; // Altura da área do título

    doc.setFont('Arial', 'bold');
    doc.setFontSize(16);
    doc.setFillColor(40, 139, 228); // Azul claro
    doc.rect(margin, margin, pageWidth - 2 * margin, titleHeight, 'F'); // Fundo do título preenchido
    doc.setTextColor(0, 0, 0);
    doc.text('E-book Gerado', pageWidth / 2, margin + titleHeight / 2 + 2, { align: 'center' }); // Texto centralizado

    // Configuração para o corpo do texto
    doc.setFont('Arial', '');
    doc.setFontSize(12);
    doc.setLineHeightFactor(1.5);

    // Ajustar posição inicial do corpo do texto
    let y = margin + titleHeight + 10; // Espaçamento após o título

    // Dividir o texto em parágrafos
    const paragraphs = transcriptionText.split('\n');

    paragraphs.forEach((paragraph) => {
        const lines = doc.splitTextToSize(paragraph, pageWidth - 2 * margin); // Ajusta o texto à largura da página
        lines.forEach((line) => {
            if (y > doc.internal.pageSize.height - margin) {
                doc.addPage(); // Adiciona nova página se o texto ultrapassar o limite
                y = margin; // Reseta a posição na nova página
            }
            doc.text(line, margin, y);
            y += 8; // Espaçamento entre linhas
        });
        y += 5; // Espaçamento entre parágrafos
    });

    // Define o nome do arquivo
    const fileName = `ebook_${Date.now()}.pdf`;
    doc.save(fileName);
});


       // Atualiza o resultado da transcrição e ativa o botão
       async function processAudio() {
        const resultDiv = document.getElementById('transcriptionResult');

        // Simulação de resultado de transcrição
        resultDiv.innerHTML = `<p>Esta é a transcrição gerada.</p>`;

        // Chama a função para verificar o botão
        toggleDownloadButton();
    }


document.getElementById('audioForm').addEventListener('submit', async (event) => {
    event.preventDefault();

    // Seleciona o botão usando a classe 'btn-loader'
    const button = document.querySelector('.btn-loader');
    if (!button) {
        console.error('Botão não encontrado.');
        return;
    }

    const formData = new FormData();
    const audioFile = document.getElementById('audioFile').files[0];

    if (!audioFile) {
        alert('Por favor, selecione um arquivo de áudio.');
        return;
    }

    formData.append('audioFile', audioFile);

    try {
        // Exibe o loader e desativa o botão
        showLoader(button);

        const response = await fetch('http://localhost:3000/', {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (!response.ok) {
            const errorText = await response.text();
            throw new Error(`Erro ao processar o arquivo: ${errorText}`);
        }

        const data = await response.json();
        const resultDiv = document.getElementById('transcriptionResult');

        if (data.status === 'completed') {

            resultDiv.innerHTML = `<p>${data.text}</p>`;

            // Atualiza o botão
            toggleDownloadButton();

            // Enviar a transcrição para o PHP para salvar no histórico
            const transcriptionData = {
                user_id: '<?php echo $_SESSION["id"]; ?>',
                transcription_text: data.text
            };

            const saveResponse = await fetch('save_transcription.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(transcriptionData)
            });

            if (!saveResponse.ok) {
                throw new Error('Erro ao salvar a transcrição no histórico.');
            }
            
        } else if (data.status === 'failed') {
            resultDiv.innerHTML = `<h3>Falha na Transcrição:</h3><p>${data.error}</p>`;
        } else {
            resultDiv.innerHTML = `<h3>Erro:</h3><p>Erro inesperado durante a transcrição.</p>`;
        }
    } catch (error) {
        console.error('Erro:', error);
        document.getElementById('transcriptionResult').innerHTML = `<h3>Erro:</h3><p>${error.message}</p>`;
    } finally {
        // Oculta o loader e reativa o botão
        hideLoader(button);
    }
});

    // Inicializa o botão (caso necessário)
    toggleDownloadButton();

</script>


<!-- Popper JS -->
<script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="../assets/js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="../assets/libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="../assets/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="../assets/libs/simplebar/simplebar.min.js"></script>
<script src="../assets/js/simplebar.js"></script>

<!-- Auto Complete JS -->
<script src="../assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js"></script>

<!-- Color Picker JS -->
<script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- Date & Time Picker JS -->
<script src="../assets/libs/flatpickr/flatpickr.min.js"></script>


        
<!-- Custom-Switcher JS -->
<script src="../assets/js/custom-switcher.min.js"></script>

        <!-- Apex Charts JS -->
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Dropzone JS -->
        <script src="../assets/libs/dropzone/dropzone-min.js"></script>

        <!-- Internal File Manager JS -->
        <script src="../assets/js/file-manager.js"></script>

        <!-- Custom JS -->
        <script src="../assets/js/custom.js"></script>

</body>

</html>