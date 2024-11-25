<?php

require_once '../models/con.php';
require_once '../models/user.php';

// Criação do objeto User
$User = new User($pdo);

$result = [
    'status' => null,
    'description' => null
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verifica se as senhas coincidem
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $result['status'] = 'error';
        $result['description'] = 'As senhas não coincidem. Por favor, tente novamente.';
    }
    // Verifica se já existe um cadastro com o e-mail informado
    elseif ($User->existe($_POST)['status'] === 'error') {
        $result['status'] = 'error';
        $result['description'] = 'Já existe cadastro com este e-mail! <br> Faça login para acessar sua conta.';
    } else {
        // Insere o novo usuário
        $User->insert($_POST);

        // Login do usuário
        $respons = $User->login([
            'email' => $_POST['email'],
            'senha' => $_POST['password']
        ]);

        if ($respons['status'] === 'success') {
            setcookie('user_id', $User->user->code, time() + (86400 * 1), "/");
            setcookie('user_token', $User->user->token, time() + (86400 * 1), "/");
            header('Location: evenAI.php');
        }
    }
}

// Session do usuário
$User->session();

require_once '../views/register.php';
?>
