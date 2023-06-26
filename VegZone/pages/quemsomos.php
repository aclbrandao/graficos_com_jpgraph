<?php
header('Content-Type: text/html; charset=utf-8',true);
spl_autoload_register (function ($classe) {
if(file_exists( "$classe.php" )) {
          include_once "$classe.php";
       } else {
          echo "O arquivo $classe.php da classe $classe não foi encontrado";
       }
    }
);

$p = new Dados ('mysql:host=localhost;dbname=vegzone', 'ana', '5qlMy5ql#');

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
              <li><a class="dropdown-item" href="/vegzone/VegZone/pages/cadastro.php">Cadastrar-se</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/vegzone/VegZone/pages/login.php">Entrar</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
        <main class="container-fluid m-0 p-0 bg-white">
            <section class="container-fluid m-0 p-0 text-center pt-4">
                <p class="h3 text-success">QUEM SOMOS?</p>
            </section>
            <section class="conteiner-fluid m-0 my-4 row bgb">
                <div class="container m-0 p-2 pt-2 col-6">
                    <p class="h4">EQUIPE VEGZONE</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis sed odio morbi quis. Nec nam aliquam sem et tortor consequat id porta. Pellentesque sit amet porttitor eget dolor. Accumsan lacus vel facilisis volutpat est velit. Iaculis eu non diam phasellus vestibulum lorem sed. Sit amet consectetur adipiscing elit. Tempus imperdiet nulla malesuada pellentesque elit. Id cursus metus aliquam eleifend mi in nulla posuere. Lacinia quis vel eros donec ac odio. Nunc pulvinar sapien et ligula ullamcorper malesuada proin.</p>
                </div>
                <div class="container m-0 p-0 col-6 bg-image" style="background-image: url('../images/quemsomos1.jpg');background-size: cover; height: 400px;background-position: bottom;"></div>
            </section>
            <section class="conteiner-fluid m-0 my-4 row">
                <div class="container m-0 p-0 col-6 bg-image" style="background-image: url('../images/quemsomos2.jpg');background-size: cover; height: 400px;background-position: bottom;"></div>
                <div class="container m-0 p-2 pt-2 col-6">
                    <p class="h4">NOSSOS VALORES</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis sed odio morbi quis. Nec nam aliquam sem et tortor consequat id porta. Pellentesque sit amet porttitor eget dolor. Accumsan lacus vel facilisis volutpat est velit. Iaculis eu non diam phasellus vestibulum lorem sed. Sit amet consectetur adipiscing elit. Tempus imperdiet nulla malesuada pellentesque elit. Id cursus metus aliquam eleifend mi in nulla posuere. Lacinia quis vel eros donec ac odio. Nunc pulvinar sapien et ligula ullamcorper malesuada proin.</p>
                </div>
            </section>
            <section class="conteiner-fluid m-0 my-4 row bgb">
                <div class="container m-0 p-2 pt-2 col-6">
                    <p class="h4">NOSSA MISSÃO</p>
                    <p>Atualmente, os consumidores veganos representam 14% da população brasileira, tendo um salto significativo de 7 milhões em novembro de 2022 para 30 milhões em janeiro de 2023. Sendo Brasília uma das capitais brasileiras que tem mais restaurantes veganos no País, é notória a demanda desses consumidores. Além disso, é atrelado ao movimento vegano o conceito de prática sustentável, que visa a reutilização dos recursos e respeito aos ciclos naturais.</p>
                </div>
                <div>
                  <?php
                    $pasta = '../graficos/quantidade';

                    if(is_dir($pasta))
                    {
                      $diretorio = dir($pasta);

                      while(($arquivo = $diretorio->read()) !== false)
                      
                      {
                      if(substr($arquivo,-3)== 'php'){	
                      echo '<iframe style="height:400px;width:500px;" src="../graficos/quantidade/'.$arquivo.'"></iframe>';
                      }
                      
                      }

                      $diretorio->close();
                    }
                    else
                    {
                      echo 'A pasta não existe.';
                    }
                    ?>
                    
                </div>
                <div class="container m-0 p-2 pt-2 col-6">
                  <p>Por isso, há necessidade de criar uma ponte entre os fornecedores e consumidores, facilitando o acesso aos produtos desejados. A VegZone é uma plataforma que soluciona esse obstáculo supracitado por conectar fornecedores de produtos veganos e de produção responsável e sustentável com seus consumidores.</p>
                </div>
                <div class="container m-0 p-0 col-6 bg-image" style="background-image: url('../images/quemsomos3.jpg');background-size: cover; height: 400px;background-position: bottom;"></div>
            </section>     
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