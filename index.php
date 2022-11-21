<?php
require_once('Conexion.php');

$recursos = new Conexion();
$recursos = $recursos->consultar("SELECT * FROM recursos limit 6");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca de recursos para docentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ee2d30d4e.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="col">
                <div class="d-flex justify-content-end">
                    <a href="login.php" class="btn btn-light m-5"><i class="fa-solid fa-arrow-right-to-bracket"></i> Ingresar</a>
                </div>
            </div>

            <div class="mb-5">
                <p class="titulo">Biblioteca</p>
                <p class="subtitulo">de recursos para docentes</p>
            </div>

            <!--Cards header-->
            <div class="container mt-4 d-flex justify-content-center">
                <div class="row g-0">
                    <div class="col-md-4 border-right">
                        <div class="cards">
                            <div class="h-100 first p-4 text-center">
                                <img src="img/descarga-en-la-nube.png" style="height:96px; width:96px;" />
                                <h5>Recursos en PDF</h5>
                                <p class="line1">para descargar desde cualquier dispositivo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-right">
                        <div class="cards">
                            <div class=" h-100 second p-4 text-center">
                                <img src="img/gratis.png" style="height:96px; width:96px;" />

                                <h5>Gratis</h5>
                                <p class="line2">obtené recursos de forma gratuita</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cards">
                            <div class=" h-100 third p-4 text-center">
                                <img src="img/calidad-premium.png" style="height:96px; width:96px;" />
                                <h5>Descargas premium</h5>
                                <p class="line3">a través de una membresía podrás disfrutar de todos los recursos disponibles del catálogo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Inicio principal-->
    <main>
        <div class="container">
            <!--Barra Search-->
            <div class="row">
                <div class="col-md-3 mt-3 offset-md-9">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-light bg-white text-black" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
            <!--Titulo main-->
            <div class="mb-5">
                <p class="text-start ms-4" id="title_main">Recursos gratuitos</p>
            </div>
            <!--Cards recursos gratuitos-->
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($recursos as $recurso){ ?>
                    <div class="col">
                        <div class="card h-100 card_hover">
                            <img src="<?= $recurso['imagen']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $recurso['nombre']; ?></h5>
                                <p class="card-text"><?= $recurso['descripcion']; ?></p>
                                <a href="<?= $recurso['archivo']; ?>" class="btn btn-primary">DESCARGAR</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <section>
        <!--Titulo-->
        <div class="mb-5">
            <p class="text-center ms-4" id="title_section">CATEGORÍAS</p>
        </div>

        <!--Categorías-->
        <div class="container">
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-light btn-lg mb-5 btn_hover" type="button"><img src="img/pencil.png" title="pencil icons" style="height:36px; width:36px;"></a>Alfabetización inicial</button>
                    <button class="btn btn-light btn-lg mb-5 btn_hover" type="button"><img src="img/book.png" title="book-open" style="height:36px; width:36px;"> Prácticas del Lenguaje</button>
                    <button class="btn btn-light btn-lg mb-5 btn_hover" type="button"><img src="img/book-stack.png" title="book-stack" style="height:36px; width:36px;"> Antologías literarias</button>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-light btn-lg mb-5 btn_hover" type="button"><img src="img/numbers.png" title="numbers" style="height:36px; width:36px;"> Matemática</button>
                    <button class="btn btn-light btn-lg mb-5 btn_hover" type="button"><img src="img/science.png" title="science" style="height:36px; width:36px;"> Ciencias</button>
                    <button class="btn btn-light btn-lg mb-5 btn_hover" type="button"><img src="img/dice.png" title="dice" style="height:36px; width:36px;"> Juegos didácticos</button>
                </div>
            </div>

            <!--Contactanos-->
            <div class="container">
                <img src="img/android-chrome-512x512.png" class="img-fluid mx-auto d-block" id="logo">
                <p class="text-center ms-4" id="contacto">Contactanos</p>
                <p class="text-center ms-4" id="contacto">bibliotecaderecursosdocentes@gmail.com</p>
            </div>


    </section>

    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img src="img/instagram.png" title="instagram" class="iconos img-fluid mx-auto d-block">
                </div>
                <div class="col-lg-4">
                    <img src="img/facebook.png" title="facebook" class="iconos img-fluid mx-auto d-block">
                </div>
                <div class="col-lg-4">
                    <img src="img/whatsapp.png" title="whatsapp" class="iconos img-fluid mx-auto d-block">
                </div>
            </div>

            <p class="text-center ms-4" id="footer_text">Hecho con 💛 por Mica Mingrone | 2022 </p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>