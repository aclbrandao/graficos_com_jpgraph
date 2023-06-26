<?php 
session_start();

  // efetua inclusao do usuário informado em cadastro.php

    $ds_email = $_POST["ds_email"];
    $senha = $_POST["ds_senha"];
    
    include_once "Conecta_Cadastro.php";

    $query = "SELECT ds_senha FROM tb_usuario WHERE ds_email = '$ds_email';";

     if ($result = mysqli_query($link, $query)){
              $senha_db = mysqli_fetch_assoc($result);

              if (password_verify($senha, $senha_db['ds_senha'] )){
                            header("Location: ../index.php");
              } else {
                            $_SESSION['msg'] = "<p style= 'color:red'>Email ou senha inválidos.<br>Tente logar novamente ou se cadastre!";
                            header("Location: login.php");
              }
                           
     }
?>