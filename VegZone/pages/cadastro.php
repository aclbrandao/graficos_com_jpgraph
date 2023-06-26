<?php

include_once "Conecta_Cadastro.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VegZone</title>
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../images/logo_vegzonevetor.png" type="image/x-icon">
</head>
<body>
  <div class="container-fluid m-0 p-0">
    <header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
            <img class="nav-item logo" src="../images/logo_vegzone.png" alt="" height="50px">
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 nav">
            <li><a href="#" class="nav-link px-3 ps-4 my-2 link-success abt">Catálogo</a></li>
            <li><a href="../pages/quemsomos.php" class="nav-link px-3 my-2 link-success abt">Quem Somos</a></li>
            <li><a href="../pages/faleconosco.html" class="nav-link px-3 my-2 link-success abt">Fale Conosco</a></li>
          </ul>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start nav2">
            <div class="dropdown text-end buttonOff">
              <a href="#" class="d-block link-dark text-decoration-none dropleft" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../images/imgMenu.png" alt="mdo" width="50" height="50" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">Catálogo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a  class="dropdown-item"href="pages/quemsomos.php">Quem Somos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a  class="dropdown-item"href="pages/faleconosco.html">Fale Conosco</a></li>
              </ul>
            </div>
            <form class="col-6 col-lg-auto mb-lg-0 me-lg-3 mx-4 w-50" role="search">
              <input type="search" class="form-control" placeholder="Buscar...">
            </form>
            <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../images/imgLogin.png" alt="mdo" width="50" height="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="/VegZone/pages/cadastro.php">Cadastrar-se</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/VegZone/pages/login.php">Entrar</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <main class="container-fluid m-0 p-0 bg-white d-flex justify-content-center align-items-center flex-column text-center bdmain">
        <section class="container-fluid m-0 p-0 text-center pt-4">
            <p class="h3 text-success">FAÇA SEU CADASTRO</p>
        </section>
        <section class="container-fluid m-0 p-0 text-center pt-4">
          <form action="cadastrocheck.php" method="POST">
            <label for="ds_nome" style="font-size: 12px; font-weight: bold;">NOME: <br>
              <input type="text" name="ds_nome" class="form-control text-center " style="width: 350px;" placeholder="Digite seu nome completo" required>
            </label><br><br>
            <!--<label for="dt_nascimento" style="font-size: 12px; font-weight: bold;">DATA DE NASCIMENTO: <br>
              <input type="text" class="form-control text-center" style="width: 350px;" required>
            </label><br><br>-->
            <label id="genero" for="genero" style= "width: 350px;"> <span style="font-size: 12px; font-weight: bold;">INFORME SEU GÊNERO:</span> <br><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input rcheck" type="radio" id="genero" name="genero" value="homem">
                <label class="form-check-label" for="genero" style="font-size: 14px;">Homem</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input rcheck" type="radio" id="genero" name="genero" value="mulher">
                <label class="form-check-label" for="genero" style="font-size: 14px;">Mulher</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input rcheck" type="radio" id="genero" name="genero" value="ni">
                <label class="form-check-label" for="genero" style="font-size: 14px;">Prefiro Não Informar</label>
              </div>
            </label><br><br>
            <label for="uf_residencia" id="uf_residencia" style="font-size: 12px; font-weight: bold;">LOCAL DE RESIDÊNCIA: <br>
              <select for="uf_residencia"  name="uf_residencia" class="form-control text-center" style="width: 350px;" required>
                <option disabled selected>Selecione seu estado de residência</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AM">Amazonas</option>
                <option value="AP">Amapá</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MG">Minas Gerais</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="PR">Paraná</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SE">Sergipe</option>
                <option value="SP">São Paulo</option>
                <option value="TO">Tocantins</option>
              </select>
            </label><br><br>
            <label for="id_status" id="id_status" style="font-size: 12px; font-weight: bold;">EU SOU... <br>
              <select for="id_status" name="id_status" class="form-control text-center" style="width: 350px;" required>
                <option disabled selected>Selecione seu status</option>
                <option value="consumidor">Consumidor</option>
                <option value="fornecedor">Fornecedor</option>
                </select>
            </label><br><br>
            <label for="ds_email" id="ds_email"  style="font-size: 12px; font-weight: bold;">E-MAIL: <br>
              <input type="email" name="ds_email" class="form-control text-center" style="width: 350px;" placeholder="exemple@exemple.com" required>
            </label><br><br>
            <label for="ds_senha" id="ds_senha"  style="font-size: 12px; font-weight: bold;">SENHA: <br>
              <input type="password" name="ds_senha" class="form-control text-center" style="width: 350px;" placeholder="Crie sua senha" required>
            </label><br><br>
            <div id="btt" class="my-2 pb-4">
              <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
          </form>
        </section>          
                </div>
    
            </div>
        </div>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
        <div class="col-md-4 d-flex align-items-center">
        </div>    
        <ul class="nav col-12 justify-content-end list-unstyled d-flex">
            <span class="mb-3 mb-md-0 pe-3 text-white">© 2023 VegZone, Inc</span>
        </ul>
    </footer>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
