<?php // content="text/plain; charset=utf-8"

require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');
require_once('../../pages/Dados.php');

//Conection:
$p = new Dados ('mysql:host=localhost;dbname=vegzone', 'usuário aqui', 'senha aqui'); 

$mes1 = $p->buscaEstoque('jan');
$mes2 = $p->buscaEstoque('feb');
$mes3 = $p->buscaEstoque('mar');

$j = $p->abreArray($mes1);
$int_j = (int) $j;

$f = $p->abreArray($mes2);
$int_f = (int) $f;

$m = $p->abreArray($mes3);
$int_m = (int) $m;

// Some data
$datay1=array($int_j,110,50,60);
$datay2=array($int_f,90,190,190);
$datay3=array($int_m,60,70,140);

// Create the basic graph
$graph = new Graph(450,300,'auto');
$graph->clearTheme();
$graph->SetScale("textlin");
$graph->img->SetMargin(40,80,30,40);

// Adjust the position of the legend box
$graph->legend->Pos(0.02,0.15);

// Adjust the color for theshadow of the legend
$graph->legend->SetShadow('darkgray@0.5');
$graph->legend->SetFillColor('lightblue@0.3');

// Get localised version of the month names
$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

// Set a nice summer (in Stockholm) image
$graph->SetBackgroundImage('green_background.jpg',BGIMG_COPY);

// Set axis titles and fonts
$graph->xaxis->title->Set('Ano de 2022');
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetColor('blue');

$graph->xaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->SetColor('black');

$graph->yaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->SetColor('black');

//$graph->ygrid->Show(false);
$graph->ygrid->SetColor('white@0.5');

// Setup graph title
$graph->title->Set('Estoque de produtos');
// Some extra margin (from the top)
$graph->title->SetMargin(3);
$graph->title->SetFont(FF_ARIAL,FS_NORMAL,12);

// Create the three var series we will combine
$bplot1 = new BarPlot($datay1);
$bplot2 = new BarPlot($datay2);
$bplot3 = new BarPlot($datay3);

// Setup the colors with 40% transparency (alpha channel)
$bplot1->SetFillColor('orange@0.4');
$bplot2->SetFillColor('white@0.4');
$bplot3->SetFillColor('darkgreen@0.4');

// Setup legends
$bplot1->SetLegend('Higiene');
$bplot2->SetLegend('Alimentação');
$bplot3->SetLegend('Vestuário');

// Setup each bar with a shadow of 50% transparency
$bplot1->SetShadow('black@0.4');
$bplot2->SetShadow('black@0.4');
$bplot3->SetShadow('black@0.4');

$gbarplot = new GroupBarPlot(array($bplot1,$bplot2,$bplot3));
$gbarplot->SetWidth(0.6);
$graph->Add($gbarplot);

$graph->Stroke();
?>
