<!DOCTYPE html>
<html lang="pt-br" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Allcateia </title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">
    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Style Css -->
    <link href="../assets/css/styles.css" rel="stylesheet" >
    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet" >
</head>

<body class="authentication-background">

    <div class="container">

        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">

            <?php if (!empty($message)) { ?>
                <p class="text-muted card op-7 p-3 fw-normal text-center">
                    <?php echo $message; ?> <br>
                    <button class="mt-3 btn btn-primary">
                        <a href="sign-in.php" class="text-white"><?php echo $messagebtn; ?></a>
                    </button>
                </p>
            <?php } ?>


                <div class="card custom-card my-4">
                    <div class="card-body p-5">
                        <div class="mb-3 d-flex justify-content-center">
                            <a>
                                <img src="../assets/images/brand-logos/logo-allcateia-black.png" alt="logo" class="desktop-logo" style="width: 200px; height: auto;">
                            </a>
                        </div>
                        <p class="h5 mb-2 text-center">Recuperar senha</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Insira seu e-mail para receber um link de redefinição de senha</p>
                        <form method="POST" action="" onsubmit="showLoader(this.querySelector('.btn-loader'))">
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signin-username" class="form-label text-default">E-mail<sup class="fs-12 text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary btn-loader">
                                    <span class="me-2">Enviar</span>
                                    <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       function showLoader(button) {
            const form = button.closest('form');
            if (form.checkValidity()) {
                button.querySelector('.loading').classList.add('show');
            }
        }
    </script>
    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>