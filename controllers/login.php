<?php 
   
  require_once '../models/con.php';
  require_once '../models/user.php';
  
  $User = new User($pdo);
  session_start();
  
 // Login do usuário
 $respons = $User->login([
  'email' => $_POST['email'],
  'password' => $_POST['password']
 ]);

 //Verifica se o login é válido
 if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if($respons['status'] === 'success'){

     setcookie('user_id', $User->user->code, time() + (86400 * 1), "/");
     setcookie('user_token', $User->user->token, time() + (86400 * 1), "/");
     $_SESSION['id'] = $User->user->id;

     header('Location: ../controllers/evenAI.php'); 
     exit(); 
   }else{

     setcookie('user_id', null, time()-1, "/");
     setcookie('user_token', null, time() -1, "/");
     $result['status'] = 'error';
     $result['description'] = 'E-mail ou senha inválido!';
     
     
   };
 };
   // Session do usuário
    $User->session();
   
      require_once '../views/login.php';
?>