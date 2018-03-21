<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DTS Sistemas | Seguridad electronica y comunicaciones</title>
    <?php require("Views/Shared/head.php");?>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="controlAcceso" class="section">
        <h1>Control de Acceso</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Control de Acceso</h2>
                        <p><b>Control de acceso</b> es un sistema automatizado que permite de forma eficaz, aprobar o negar el paso de personas o grupo de personas a zonas restringidas en función de ciertos parámetros de seguridad establecidos por una empresa, comercio o institución.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/controlAcceso/banner/1.jpg" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/controlAcceso/banner/2.png" class="cut" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>Funcionalidades</h3>
                        <p>existen varias opciones para controlar un acceso, teclados numéricos, biométricos (huella digital) , tarjetas de proximidad, vehicular etc…<br>donde se buscara la mejor opción para la seguridad de su negocio, casa y familia</p>
                    </div>
                </div>
            </div>
            <aside id="servicios" class="row">
                <div class="col-md-4">
                    <?php include("Views/Servicios/_cableado.php");?>
                </div>
                <div class="col-md-4">
                    <?php include("Views/Servicios/_alarmaIncendio.php");?>
                </div>
                <div class="col-md-4">
                    <?php include("Views/Servicios/_seguridadPerimetral.php");?>
                </div>
            </aside>
        </div>
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
    <script>
        setMenuActive("Servicios");
    </script>
</body>

</html>
