 <?php 
  
// efetua inclusao do usuário informado em cadastro.php
 
  $nome = $_POST["ds_nome"];
  //$dt_nascimento = $_POST["dt_nascimento"];
  $genero = $_POST["genero"];
  $uf_residencia = $_POST["uf_residencia"];
  $id_status = $_POST["id_status"];
  $ds_email = $_POST["ds_email"];
  $senha = $_POST["ds_senha"];
  $senha_segura = password_hash($senha, PASSWORD_DEFAULT);
  
  include_once "Conecta_Cadastro.php";

  $query = "INSERT INTO tb_usuario 
      (ds_nome, genero, uf_residencia, id_status, ds_email, ds_senha) 
	  values
      ('$nome', '$genero', '$uf_residencia', '$id_status', '$ds_email', '$senha_segura');";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  if (mysqli_insert_id($link)){
    header("Location: login.php");
  } 


?>  