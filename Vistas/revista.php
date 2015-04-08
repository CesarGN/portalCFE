
<?php

include ('../Librerias/adodb5/adodb.inc.php');
include ('../Modelo/Conexion.php');
include ('../Modelo/Modelo.php');
include ('../Controlador/revista_controlador.php');
include ('header.php');



$db = new revista_controlador();
$datos = $db->regresa_noticia($_GET['cve']);

$cent = 0;
echo '<div class="container margen_top1">';

for ($i = 0; $i < sizeof($datos); $i++) {
    $cent += 1;
    if ($cent == 1) {
        echo '<div class="row">';
        $class = 'col-lg-3';
    }
    if ($cent == 2) {
        $class = 'col-lg-4 col-lg-offset-1';
    }
    if ($cent == 3) {
        $class = 'col-lg-3 col-lg-offset-1';
        $cent = 0;
    }
    
    echo '<div class="' . $class . '">';
    echo '<div class="thumbnail centrar">';
    echo '<h5> ' . $datos[$i]['TITULO'] . ' </h5>';
    echo '<img  class="img_revista img-rounded" src = "../Recursos/revista/' . $datos[$i]['URL'] . '" alt = "..." />';
    echo '</div>';
    echo '</div>';
    if($cent==0){
        echo ' </div>';
    }
}

echo '</div>';

include ('footer.php');
?>


