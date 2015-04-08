<?php include ('../Librerias/adodb5/adodb.inc.php'); ?>
<?php include ('../Modelo/Conexion.php'); ?>
<?php include ('../Modelo/Modelo.php'); ?>
<?php include ('../Controlador/principal_controlador.php'); ?>
<?php include ('header.php'); ?>
<?php
$obj = new Principal_controlador();
$datos_dpto = $obj->regresa_dpto();
?>	


<div class="container margen_top">
    <div class="col-lg-6">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item ancho centrar active">
                    <img src="../Recursos/Celaya-03.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item centrar ancho">
                    <img src="../Recursos/cfe.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="row">
            <h2 class="centrar">Misi&oacute;n</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
        <div class="row">
            <h2 class="centrar">Valores</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
    </div>
</div>


<div class="margen_top">
    <div class="col-lg-12">
        <div id="carousel-departamentos" class="carousel slide " data-ride="carousel1">
            <div class="carousel-inner ajuste_dpto"   role="listbox">
                <?php
                $sentinela = 0;
                $active = 0;
                for ($i = 0; $i <= (sizeof($datos_dpto) - 1); $i++) {
                    if ($sentinela === 0) {
                        if ($active === 0) {
                            $active++;
                            echo '<div class = "item ancho centrar active">';
                        } else {
                            echo '<div class = "item ancho centrar">';
                        }
                    }
//                    echo '<a href="departamento.php?dpto=' . $datos[$i][0] . '" target=""> <img class="col-lg-3" border=0 src="../Recursos/dpto/' . $datos[$i][1] . '">  </a>';

                    echo '<div class = "thumbnail col-lg-3">';

                    echo '<a href="departamento.php?dpto=' . $datos_dpto[$i][0] . '" target=""> <img  border=0 src="../Recursos/dpto/' . $datos_dpto[$i][1] . '">  </a>';
                    echo '<div class = "caption">';
                    echo '<h6>' . $datos_dpto[$i][2] . '</h6>';
                    echo '</div>';
                    echo '</div >';
                    $sentinela++;
                    if ($sentinela == 4) {
                        $sentinela = 0;
                        echo '</div>';
                    }
                }
                ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-departamentos" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-departamentos" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<div class="col-lg-8 col-lg-offset-2 margen_top">
    <h1 class="centrar">OTROS ENLACES</h1>
</div>

<?php include ('footer.php'); ?>
