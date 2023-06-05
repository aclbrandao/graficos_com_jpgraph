<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VegZone</title>
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/logo_vegzonevetor.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                  <img class="nav-item logo" src="images/logo_vegzone.png" alt="" height="50px">
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 nav">
                  <li><a href="#" class="nav-link px-3 ps-4 my-2 link-success abt">Catálogo</a></li>
                  <li><a href="pages/quemsomos.php" class="nav-link px-3 my-2 link-success abt">Quem Somos</a></li>
                  <li><a href="pages/faleconosco.html" class="nav-link px-3 my-2 link-success abt">Fale Conosco</a></li>
                </ul>
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start nav2">
                  <div class="dropdown text-end buttonOff">
                    <a href="#" class="d-block link-dark text-decoration-none dropleft" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="images/imgMenu.png" alt="mdo" width="50" height="50" class="rounded-circle">
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
                    <img src="images/imgLogin.png" alt="mdo" width="50" height="50" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="/pages/cadastro.html">Cadastrar-se</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/pages/login.html">Entrar</a></li>
                  </ul>
                </div>
                </div>
              </div>
              </div>
            </div>
          </header>
        <main class="container-fluid m-0 p-0 bg-white">
            <div class="container-fluid m-0 my-1 p-0" id="slider">
                <div id="banners" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="images/banner1.png" style="height: 450px;background-position: center;" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/banner2.png" style="height: 450px;background-position: center;" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/banner3.png" style="height: 450px;background-position: center;" alt="Third slide">
                      </div>
                      <div class="carousel-item w-100">
                        <img class="d-block w-100" src="images/banner4.png" style="height: 450px;background-position: center;" alt="Fourth slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev"  type="button" data-bs-target="#banners" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#banners" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <section class="container-fluid m-0 p-0 text-center pt-4">
                <p class="h3 text-success">SEU CATÁLOGO VEGSUSTENTÁVEL!</p>
                <p class="h6 pb-4">Nossos parceiros se comprometem com o futuro de nosso planeta, com valores e meios de produção que se preocupam com nossa casa.</p>
            </section>
            <section class="conteiner-fluid m-0 my-4 pt-5 pb-5 d-flex justify-content-center bgb">
                <div class="container m-0 p-0 pt-5 pb-5 d-flex justify-content-space">
                    <button id="cat" class="container col-3 border p-2 text-center itemsb">
                        <a href="pages/alimentacao.html"><img src="images/card1.png" alt="" width="100%"></a>
                    </button>
                    <button id="cat" class="container col-3 border p-2 text-center itemsb">
                        <a href="pages/vesturario.html"><img src="images/card2.png" alt="" width="100%"></a>
                    </button>
                    <button id="cat" class="container col-3 border p-2 text-center itemsb">
                        <a href="pages/cosmeticos.html"><img src="images/card3.png" alt="" width="100%"></a>
                    </button>    
                </div>
                </section>
                <section class="container-fluid m-0 p-0 text-center pt-4 my-3">
                <div>
                  <?php
                    $pasta = 'graficos/estoque';

                    if(is_dir($pasta))
                    {
                      $diretorio = dir($pasta);

                      while(($arquivo = $diretorio->read()) !== false)
                      
                      {
                      if(substr($arquivo,-3)== 'php'){	
                      echo '<iframe style="height:400px;width:500px;" src="graficos/estoque/'.$arquivo.'"></iframe>';
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
                    <p class="h3 text-success">CONHEÇA MAIS SOBRE O MUNDO VERDE</p>
                    <p class="h6 pb-5">Nossos parceiros se comprometem com o futuro de nosso planeta, com valores ambientais e sustentáveis e meios de produção que se preocupam com nossa casa.</p>
            </section>
            <section class="conteiner-fluid m-0 my-1 pt-5 pb-5 d-flex justify-content-center bgb">
                <div class="container col-3"></div>
                <div class="container m-0 p-0 pt-5 pb-5 d-flex justify-content-space">
                    <button class="container col-3 border p-2 text-center itemsb">
                        <a href="https://akatu.org.br/oito-caminhos-para-um-futuro-sustentavel/" target="_blank">
                            <img src="images/card4.png" alt="" width="100%"></a>
                    </button>
                    <button class="container col-3 border p-2 text-center itemsb">
                        <a href="https://origoenergia.com.br/blog/consumo-consciente/consumo-sustentavel-o-que-e-e-qual-a-importancia/#:~:text=Entre%20as%20vantagens%20do%20consumo,sustent%C3%A1vel%20n%C3%A3o%20incentiva%20o%20desperd%C3%ADcio." target="_blank">
                            <img src="images/card5.png" alt="" width="100%"></a>
                    </button>
                    <div class="container col-3"></div>
                </div>
            </section>           
        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">   
            <ul class="nav col-12 justify-content-end list-unstyled d-flex">
                <span class="mb-md-0 pe-3 text-white">© 2023 VegZone, Inc</span>
            </ul>
        </footer>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>
</html>