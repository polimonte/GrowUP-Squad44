<?php 
class User {
    public $pdo;
    public $user;
    function __construct($conexao) {
      $this->pdo = $conexao;
    }

        //CONFIGURAÇÃO DO COOKIE
        public function session(){
    
          // Prepara e executa uma consulta SQL para verificar a sessão do usuário
          $sql = $this->pdo->prepare("SELECT * FROM register WHERE `code` = :code AND `token` = :token");
          $sql->execute([
            ':code' => $_COOKIE['user_id'],
            ':token' => $_COOKIE['user_token']
          ]);
          
          // Verifica se a consulta retornou algum resultado
          if($sql->rowCount()>0){
         // Atribui o resultado da consulta ao objeto $this->user
            $this->user = $sql->fetchObject();
            return [
              'status' => 'success',
              'description' => 'Sessão válida!'
            ];
          }else{
            return [
              'status' => 'error',
              'description' => 'Você foi desconectado!'
            ]; 
          }
        }


        
      //UPDATE DO TOKEN  
      public function login($d) {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM register WHERE email = :email");
            $sql->execute([
                ':email' => trim(strtolower($d['email']))
            ]);
    
            if ($sql->rowCount() > 0) {
                $user = $sql->fetchObject();
    
                // Certifique-se de verificar o índice correto para a senha
                if (password_verify($d['senha'], $user->senha)) {
                    $token = password_hash(date('Y-m-d H:i:s'), PASSWORD_DEFAULT);
    
                    $update = $this->pdo->prepare("UPDATE register SET token = :token WHERE id = :id");
                    $update->execute([
                        ':token' => $token,
                        ':id' => $user->id
                    ]);
    
                    if ($update->rowCount() > 0) {
                        $user->token = $token;
                        $this->user = $user;
    
                        return [
                            'status' => 'success',
                            'description' => 'Login realizado com sucesso!'
                        ];
                    } else {
                        return [
                            'status' => 'error',
                            'description' => 'Erro ao atualizar token. Tente novamente.'
                        ];
                    }
                } else {
                    return [
                        'status' => 'error',
                        'description' => 'Senha inválida!'
                    ];
                }
            } else {
                return [
                    'status' => 'error',
                    'description' => 'Usuário não encontrado!'
                ];
            }
        } catch (\PDOException $e) {
            return [
                'status' => 'error',
                'description' => 'Erro no banco de dados: ' . $e->getMessage()
            ];
        }
    }
      


//verifica se existe o email no banco de dados
   public function existe($d){

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Verifica se o e-mail já está cadastrado
     $checkEmailSql = $this->pdo->prepare("SELECT * FROM `register` WHERE `email` = :email");
     $checkEmailSql->execute([':email' => strtolower($d['email'])]);
      
      if ($checkEmailSql->rowCount() > 0) {
        return [
          'status' => 'error',
          'description' => 'Já existe cadastro com este e-mail',
        ];
      };
    };
  }

  //ADICIONAR DADOS DO CADASTRO AO BANCO DE DADOS
    public function insert($d){   
      // Prepara uma consulta SQL para inserir um novo registro na tabela 'register'
      $sql = $this->pdo->prepare("
        INSERT INTO `register` 
        (`id`, `code`,`email`, `senha`, `token`) 
        VALUES (NULL,uuid(),:email,:senha,:token)");
        
        // Executa a consulta SQL, substituindo os valores dos parâmetros
        $sql->execute([
          ':email' => strtolower($d['email']),
          ':senha' => password_hash($d['senha'], PASSWORD_DEFAULT),
          ':token' => password_hash(date('Y-m-d H:i:s'), PASSWORD_DEFAULT)
        ]);
        
        // Verifica se a inserção foi bem-sucedida
        if($sql->rowCount()>0){  

          return [
            'status' => 'success',
            'description' => 'Cadastro realizado com sucesso!'
          ] ;
          
        }else {
          return [
            'status' => 'error',
            'description' => 'Algo deu errado!'
          ];
        }
    
  }

  public function getUserById($userId) {
    $sql = $this->pdo->prepare("SELECT * FROM register WHERE id = :id");
    $sql->execute([
      ':id' => $userId
    ]);
        return $sql->fetch(PDO::FETCH_ASSOC);
  }

};