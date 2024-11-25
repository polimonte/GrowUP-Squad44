<!DOCTYPE html>
<html lang="pt-br" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Even3 </title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon-even3.png" type="image/x-icon">
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

    <div class=" mt-4 ms-4 justify-content-left">
        <a>
            <img src="../assets/logomarca/logo-even3-light.svg" alt="logo" class="desktop-logo" style="width: 100px; height: auto;">
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">

                <div class="card custom-card my-4">
                    <div class="card-body p-5">
                        <p class="h5 mb-2 text-center">Cadastre-se</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Seja bem vindo! Cadastre-se para acessar sua conta</p>

                        <?php if ((!empty($result['description'])) && ($result['status'] !== 'error-security')) { ?>
                            <p class="alert alert-danger mb-4 op-7 p-2 text-center" role="alert">
                                <?php echo $result['description']; ?> <br>
                            </p>
                        <?php } ?>

                        <form method="POST" action="" onsubmit="showLoader(this.querySelector('.btn-loader'))">
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signin-username" class="form-label text-default">E-mail<sup class="fs-12 text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <label for="signin-password" class="form-label text-default d-block">Senha<sup class="fs-12 text-danger">*</sup></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control create-password-input" name="password" id="signin-password" placeholder="senha" required>
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password', this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                        <p id="password-message" class="text-danger"></p>
                                    </div>
                                </div>

                                <div class="col-xl-12 mb-2 mt-0">
                                    <label for="signin-password_confirm" class="form-label text-default d-block">Confirme sua senha<sup class="fs-12 text-danger">*</sup></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control create-password-input" name="confirm_password" id="signin-password_confirm" placeholder="confirme sua senha" required>
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password_confirm', this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                
                            </div>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-loader" style="background-color: #288BE4;">
                                    <span class="me-2 text-white">Concluir cadastro</span>
                                    <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                </button>
                            </div>
                            
                            <div class="d-grid btn mt-2">   
                                    <a href="login.php" style="color: #288BE4; margin-left: -17px;">Fazer login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>
    <script>
       function showLoader(button) {
            const form = button.closest('form');
            if (form.checkValidity()) {
                button.querySelector('.loading').classList.add('show');
            }
        }

    </script>
</body>

</html>