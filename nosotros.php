<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GLOBAL SECURITY | Seguridad electronica y comunicaciones</title>
    <?php require("Views/Shared/head.php");?>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="nosotros">
        <h1>QUIENES SOMOS</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <p>Una empresa, cuyo objetivo es cubrir las necesidades de nuestros clientes; comenzamos en 1979 en el ramo de las telecomunicaciones; posteriormente fuimos creciendo especializándonos en tecnología, basándonos en las exigencias de nuestros clientes, brindando servicio tanto a Residencias como a  grandes y pequeños negocios.</p>
                        <div data-aos="fade-down">
                            <img src="img/nosotros.jpg" alt="nosotros" class="rimg">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h3>Misión</h3>
                        <p>Ofrecer las mejores soluciones en tecnología, innovando y brindándoles una mejora continua, un servicio de calidad, visualizando con objetividad las necesidades individuales de cada cliente.</p>
                    </div>
                    <div>
                        <h3>Visión</h3>
                        <p>Ser una empresa plenamente identificada, profesional y responsable, brindar solución en tecnología  y así mismo brindar calidad en el servicio, otorgando respeto, honestidad y ante todo profesionalismo.</p>
                    </div>
                    <div>
                        <h3>Objetivos</h3>
                        <p>Brindarle atención personalizada e inmediata estando a la vanguardia en tecnología electrónica de seguridad y comunicación; siendo los mejores del mercado.</p>
                    </div>
                </div>
            </div>
            <aside id="servicios" class="row">
                <div class="col-md-3">
                    <?php include("Views/Servicios/_cableado.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_cctv.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_alarmaIncendio.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_seguridadPerimetral.php");?>
                </div>
            </aside>
        </div>
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
    <script>
        setMenuActive("Nosotros");
    </script>
</body>

</html>
