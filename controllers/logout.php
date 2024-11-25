<?php
session_start();

// Limpa todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

setcookie('user_id', null, time()-1, "/");
setcookie('user_token', null, time() -1, "/");

// Redireciona para a página de login
header("Location: login.php");
exit();
?>
