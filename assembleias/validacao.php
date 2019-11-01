<?php

include_once 'db_connect.php';
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
    
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
    
  // Validação do usuário/senha digitados
  $query_login = $connMysqli->query("SELECT `id`, `nome`, `nivel` FROM `assemb_usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1");
  
  if($query_login->num_rows != 1){ 
    
    //   echo "Login inválido!"; exit;
      header("Location: index.php"); exit;

  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = $query_login->fetch_assoc();
  }
    
 // Se a sessão não existir, inicia uma
 if (!isset($_SESSION)) session_start();
    
 // Salva os dados encontrados na sessão
 $_SESSION['UsuarioID'] = $resultado['id'];
 $_SESSION['UsuarioNome'] = $resultado['nome'];
 $_SESSION['UsuarioNivel'] = $resultado['nivel'];

 // Redireciona o visitante
 header("Location: index.php"); exit;
?>