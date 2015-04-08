<?php include ('../Librerias/adodb5/adodb-pager.inc.php'); ?>
<?php include ('../Librerias/adodb5/adodb.inc.php'); ?>
<?php include ('../Modelo/Conexion.php'); ?>
<?php include ('../Modelo/Modelo.php'); ?>
<?php include ('../Controlador/departamento_controlador.php'); ?>

<?php
$db = new departameto_controlador();
$datos_dpto = $db->regresa_dpto($_GET['dpto']);
$jefe_ofic = $db->regresa_jefeofi($_GET['dpto']);
$jefe_dpto = $db->regresa_jefedpto($_GET['dpto']);
$aplicac = $db->regresa_aplicaciones($_GET['dpto']);
$class_colum = 0;
if (sizeof($jefe_ofic) == 1) {
    $class_colum = 'col-lg-3 col-lg-offset-4';
}
if (sizeof($jefe_ofic) == 2) {
    $class_colum = 'col-lg-3 col-lg-offset-2';
}
if (sizeof($jefe_ofic) == 3) {
    $class_colum = 'col-lg-4';
}

if (sizeof($jefe_ofic) >= 4) {
    $class_colum = 'col-lg-3';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal</title>
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.2-dist/ext/propios.css" rel="stylesheet">

        <script src="bootstrap-3.3.2-dist/ext/ie-emulation-modes-warning.js"></script>
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>-->

    </head>
    <body>
        
        <div class="container">

            <div class="row col-lg-3 margen_top">
                <a href="principal.php" class="thumbnail">
                    <img src="../Recursos/cfe-mexico.jpg" alt="...">
                </a>
            </div>

            <div class="row col-lg-8 col-lg-offset-1">
                <div class="page-header centrar">

                    <h1><median><?php echo "  " . $datos_dpto[0]['NOMBRE']; ?></median></h1>
                </div>
            </div>


        </div>

        <div class="container">
            <div class="row">

                <div class=" col-lg-3 ">
                    <a class="thumbnail sombra_vino">
                        <div class="caption centrar">
                            <p>JEFE DE DEPARTAMENTO</p>
                        </div>
                        <img class="peque_jefe img-rounded" src=<?php echo '../Recursos/jefes/' . $jefe_dpto[0]['URLFOTO']; ?> alt="...">
                        <div class="caption centrar">
                            <p><?php echo $jefe_dpto[0]['NOMBRE'] . $jefe_dpto[0]['APELLIDO']; ?></p>
                            <p><?php echo 'Correo: ' . $jefe_dpto[0]['CORREO']; ?></p>
                            <p><?php echo 'Telefono: ' . $jefe_dpto[0]['TELEFONO']; ?></p>
                        </div>
                    </a>
                </div>
                <div class=" col-lg-8 col-lg-offset-1 tam_img_depto">

                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Objetivo</h3>
                            <p><?php echo $datos_dpto[0]['OBJETIVO']; ?></p>
                        </div>
                        <img class="peque_foto img-rounded" src=<?php echo '../Recursos/dpto/' . $datos_dpto[0]['URLFOTO']; ?> alt="...">
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                for ($i = 0; $i < (sizeof($jefe_ofic)); $i++) {
                    echo '<div class="' . $class_colum . '">';
                    echo '<a class="thumbnail sombra_gris">';
                    echo '<div class="caption centrar">';
                    echo '<p>JEFE DE OFICINA</p>';
                    echo '</div>';
                    echo '<img class="peque_jefe img-rounded" src=../Recursos/jefes/' . $jefe_ofic[$i]['URLFOTO'] . ' alt="...">';
                    echo ' <div class="caption centrar">';
                    echo '<p>' . $jefe_ofic[$i]['NOMBRE'] . $jefe_ofic[$i]['APELLIDO'] . '</p>';
                    echo '<p> Correo: ' . $jefe_ofic[$i]['CORREO'] . '</p>';
                    echo '<p> Telefono: ' . $jefe_ofic[$i]['TELEFONO'] . '</p>';
                    echo '</div>';
                    echo' </a>';
                    echo' </div>';
                }
                ?>

            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <a  class="thumbnail">
                        <img src=<?php echo '../Recursos/organigramas/' . $datos_dpto[0]['URLORGANIGRAMA'] ?> alt="...">
                    </a>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-12">
                    <ul class="alert alert-warning nav nav-pills">
                        <h5>APLICACIONES</h5>
                        <?php
                        for ($i = 0; $i < (sizeof($aplicac)); $i++) {
                            echo '<li role="presentation"><a href="' . $aplicac[$i]['URL'] . '">' . $aplicac[$i]['NOMBRE'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>


            </div>
        </div>
<?php include ('footer.php'); ?>



