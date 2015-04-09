<?php
include ('../Librerias/adodb5/adodb.inc.php');
include ('../Modelo/Conexion.php');
include ('../Modelo/Modelo.php');
include ('../Controlador/interes_controlador.php');
include ('header.php');
$db = new interes_controlador();
$datos = $db->regresa_interes($_GET['cve']);
//print_r($datos);
?>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Interés</h1>
        </div>

    </div>
</div>

<div class="container margen_top1">
    <div class="row">
        <div class="panel-group col-lg-12" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            for ($i = 0; $i < sizeof($datos); $i+=2) {
                ?>

                <div class="panel panel-default col-lg-5  col-lg-offset-1">

                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <div class="media-left">
                                <a>
                                    <img class="media-object img_interes" src="../Recursos/interes/<?php echo $datos[$i]['URL']; ?>" alt="...">
                                </a>
                            </div>
                            <div class="media-body ">
                                <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $datos[$i]['CVENOTICIA']; ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $datos[$i]['TITULO']; ?>
                                </a>
                                
                            </div>
                        </h4>

                    </div>
                    <div id="<?php echo $datos[$i]['CVENOTICIA']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <?php echo $datos[$i]['DESCRIPCION']; ?>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default col-lg-5 margenizq">

                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <div class="media-left">
                                <a>
                                    <img class="media-object img_interes" src="../Recursos/interes/<?php echo $datos[$i+1]['URL']; ?>" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $datos[$i+1]['CVENOTICIA']; ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $datos[$i+1]['TITULO']; ?>
                                </a>
                                
                            </div>
                        </h4>

                    </div>
                    <div id="<?php echo $datos[$i+1]['CVENOTICIA']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <?php echo $datos[$i+1]['DESCRIPCION']; ?>
                        </div>
                    </div>
                </div>

            <?php }
            ?>

        </div>
    </div>
    <?php
    include ('footer.php');
    ?>




