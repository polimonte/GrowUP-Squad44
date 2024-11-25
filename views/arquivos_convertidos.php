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
                                    <li class="breadcrumb-item active" aria-current="page">Todos arquivos convertidos</li>
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
                                <div class="col-xl-4 col-md-6">
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
                                                <li class="files-type">
                                                    <a href="evenAI.php">
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
                                                <li class="active files-type">
                                                    <a href="">
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
                                <div class="col-xxl-8 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3">
                                            <div>
                                                <span class="avatar avatar-md bg-secondary-transparent">
                                                    <i class="ri-hard-drive-2-fill fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="mt-2">
                                                    <h6>Áudios Convertidos em E-book :</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <?php if (count($transcriptions) > 0): ?>
                                                    <?php foreach ($transcriptions as $transcription): ?>
                                                        <div class="alert alert-primary alert-dismissible fade show custom-alert-icon">
                                                            <?php
                                                            // Limita a quantidade de caracteres da primeira linha
                                                            $firstLine = strtok($transcription['transcription_text'], "\n");
                                                            // Verifica se o texto da primeira linha é maior que 100 caracteres
                                                            $shortenedText = (strlen($firstLine) > 100) ? substr($firstLine, 0, 100) . '...' : $firstLine;
                                                            echo nl2br(htmlspecialchars($shortenedText)); 
                                                            ?>
                                                        </div>
                                                        <div class="text-end mb-3">
                                                            <a href="view_ebook.php?id=<?php echo $transcription['id']; ?>&download=true" class="btn btn-primary btn-sm">
                                                                <i class="ri-book-line"></i>Baixar E-book
                                                            </a>
                                                        </div>

                                                    <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>Você ainda não tem ebooks convertidos.</p>
                                            <?php endif; ?>
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