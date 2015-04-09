
<?php
include ('../Librerias/adodb5/adodb.inc.php');
include ('../Modelo/Conexion.php');
include ('../Modelo/Modelo.php');
include ('../Controlador/revista_controlador.php');
include ('header.php');



$db = new revista_controlador();
$datos = $db->regresa_noticia($_GET['cve']);

$cent = 0;
echo '<div class="container margen_top">';

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
    ?>

    <div class="<?php echo $class; ?>">
        <div class="thumbnail centrar sombra_gris">
            <h5><?php echo $datos[$i]['TITULO']; ?></h5>';
            <img  onclick="modall(' <?php echo $datos[$i]['TITULO']; ?> ',' <?php echo $datos[$i]['URL']; ?> ',' <?php echo $datos[$i]['DESCRIPCION']; ?> ')"  class="img_revista img-rounded" src = "../Recursos/revista/<?php echo $datos[$i]['URL']; ?>" alt = "..." />
        </div>
    </div>


    <?php
    if ($cent == 0) {
        echo ' </div>';
    }
}
echo '</div>';
?>

<div class="modal fade" id="modalito"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 id="titulo" class="modal-title centrar" id="myModalLabel"> </h2>
            </div>
            <div class="modal-body">
                <img  id="imagen" class="img_revista_toggle img-rounded"  alt = "..." />
                <p id="descripcion">    </p>
            </div>
        </div>

    </div>
</div>

<?php
include ('footer.php');
?>

