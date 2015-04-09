<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal</title>
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.2-dist/ext/propios.css" rel="stylesheet">
        <script languaje="javascript">
        
//            function modall(tit,ur,descri){
//    
//                    document.getElementById('titulo').innerHTML=tit;
//                    document.getElementById('imagen').setAttribute('src', "../Recursos/revista/"+ ur);
//                    document.getElementById('descripcion').innerHTML=descri;
//    
//                $('#modalito').modal({
//                    show: 'true'
//                });
//
//                 //alert(tit + " " + descri + " "+ ur);  
//   
//            }
        </script>

        <script src="bootstrap-3.3.2-dist/ext/ie-emulation-modes-warning.js"></script>
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>-->


    </head>
    <body>
        <div class="container margen_top">

            <div class="col-lg-3 rojo">
                <a class="thumbnail">
                    <img src="../Recursos/cfe-mexico.jpg" alt="...">
                </a>
            </div>

            <div class="col-md-offset-1 col-lg-4 azul">
                <h3 class="centrar">Zona de distribuci&oacute;n</h3>
                <h1 class="centrar">Celaya</h1>
            </div>

            <div class="col-md-offset-1 col-lg-3 verde">
                <a class="thumbnail">
                    <img src="../Recursos/CFE.jpg" alt="...">
                </a>
            </div>

        </div>

        <div class="container margen_top">
            <ul class="list-inline nav nav-tabs col-lg-9 col-lg-offset-2">
                <li role="presentation" class="active"><a href="principal.php">Inicio</a></li>
                <li role="presentation" class="active"><a href="">Directorio</a></li>
                <li role="presentation" class="active"><a href="">Regionales y agencias</a></li>
                <li role="presentation" class="active"><a href="">Inter&eacute;s</a></li>
                <li role="presentation" class="active"><a href="revista.php?cve=1" target="_self">Revista</a></li>
                <li role="presentation" class="active"><a href="">Mapa del sitio</a></li>    
                <?php $var = "hola mundo";
                echo '<li onclick="func_modal(' . $var . ')" role="presentation" class="active"><a href="">Contacto</a></li> '
                ?>
            </ul>
        </div>
