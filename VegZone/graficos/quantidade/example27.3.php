<?php // content="text/plain; charset=utf-8"

require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('jpgraph/jpgraph_pie3d.php');
require_once('../../pages/Dados.php');

//header('Content-Type: text/html; charset=utf-8',true);
//spl_autoload_register (function ($classe) {
//if(file_exists( "$classe.php" )) {
//          include_once "$classe.php";
//       } else {
//          echo "O arquivo $classe.php da classe $classe não foi encontrado";
//       }
//    }
//);


$p = new Dados ('mysql:host=localhost;dbname=vegzone', 'usuário aqui', 'senha aqui');  

$vegetarianos = $p->buscaQuantidade(1);
$carnistas = $p->buscaQuantidade(2);

$v = $p->abreArray($vegetarianos);
$double_v = (double)$v;

$c = $p->abreArray($carnistas);

$double_c = (double)$c;

$data = array($double_v, $double_c);

$graph = new PieGraph(330,200);
$graph->clearTheme();
$graph->SetShadow();

$graph->title->Set("Vegetarianos e veganos no brasil");
$graph->title->SetFont(FF_FONT2,FS_BOLD);

$p1 = new PiePlot3D($data);
$p1->ExplodeSlice(1);
$p1->SetCenter(0.50);
//$p1->SetLegends($gDateLocale->GetShortMonth());

$graph->Add($p1);
$graph->Stroke();

?>