<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="principal">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <!-- Logo en la izquierda -->
                <a class="navbar-brand" href="#">
                    <img src="Recinto logo 2022.png" alt="Recinto" width="80" height="70"
                        class="d-inline-block align-text-top " id="Recinto">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="MENU_CENTRAL">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="NOSOTROS">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PROYECTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACTO</a>
                        </li> <!-- Aseguramos de cerrar esta etiqueta </li> -->
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-start">
                    <button type="button" class="btn btn-custom">CONTACTANOS</button>
                </div>
        </nav>
    </div>
    <div class="parallax" style="position: relative; height: 90vh;">
        <div id="barra-texto" class="d-flex flex-column justify-content-center align-items-center"
            style="position: absolute; bottom: 0; height: 27vh; width: 100%;">
            <p id="titulo-barra" class="h1 text-center">DISEÑO Y CONSTRUCCIÓN CON ENFOQUE EN LA EXCELENCIA
                ARQUITECTÓNICA Y ESTRUCTURAL</p>
        </div>
    </div>
    <div class="parallax2 d-flex align-items-center justify-content-center text-center" style="height: 200vh;">
        <div>
            <p id="texto-imagen" class="h1 my-4">
                En Recinto, transformamos ideas en espacios que no solo cumplen su función, sino que también inspiran y
                elevan los estándares de la arquitectura moderna
            </p>
            <p id="texto-imagen" class="h1 my-1">
                Nuestro compromiso es fusionar estética y funcionalidad para crear espacios únicos que reflejan
                innovación, calidad y el espíritu de quienes los habitan.
            </p>
        </div>
    </div>
    <h2 id="proyectos" class="text-start ms-3">Nuestros Mejores Proyectos</h2>
    <div id="carousel" class="container my-5">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <img src="I6.png" class="img-fluid w-100" alt="Casa Reflejo">
                        </div>
                        <div class="col-md-6">
                            <h3>Cocina Aura Moderna</h3>
                            <ul class="features list-inline text-muted">
                                <li class="list-inline-item">Moderno</li>
                                <li class="list-inline-item">Elegante</li>
                                <li class="list-inline-item">Funcional</li>
                                <li class="list-inline-item">Minimalista</li>
                                <li class="list-inline-item">Sofisticado</li>
                            </ul>
                            <p class="description">
                                Esta cocina moderna y elegante destaca por su diseño minimalista que combina materiales
                                de alta calidad y colores sofisticados. Con muebles en azul verdoso y una isla central
                                con superficie de mármol oscuro, el espacio ofrece un ambiente exclusivo y funcional.
                                Las amplias ventanas permiten la entrada de luz natural, creando un entorno luminoso y
                                acogedor. Las lámparas colgantes y las sillas de estilo contemporáneo añaden un toque de
                                sofisticación, haciendo de esta cocina el lugar perfecto para compartir momentos
                                inolvidables. Un verdadero centro de estilo y comodidad en el corazón de tu hogar.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <img src="P3.png" class="img-fluid" alt="Casa Reflejo">
                        </div>
                        <div class="col-md-6">
                            <h3>Terraza Zen</h3>
                            <ul class="features list-inline text-muted">
                                <li class="list-inline-item">Contemporánea</li>
                                <li class="list-inline-item">Acogedora</li>
                                <li class="list-inline-item">Sofisticada</li>
                                <li class="list-inline-item">Funcional</li>
                                <li class="list-inline-item">Natural</li>
                            </ul>
                            <p class="description">
                                Esta terraza contemporánea destaca por su diseño sofisticado que combina madera,
                                ladrillo y cristal en perfecta armonía. Con un área de descanso acogedora y un toldo
                                moderno que proporciona sombra, el espacio invita a disfrutar de la frescura del
                                exterior en cualquier momento del día. El diseño abierto, con plantas decorativas y una
                                parrilla integrada, crea un ambiente ideal para la convivencia y el relax. Un verdadero
                                refugio de confort y estilo, donde cada detalle ha sido pensado para ofrecer una
                                experiencia única al aire libre.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <img src="{{asset('css/p3.png')}}" class="img-fluid" alt="Casa Reflejo">
                        </div>
                        <div class="col-md-6">s
                            <h3>Casa Reflejo</h3>
                            <ul class="features list-inline text-muted">
                                <li class="list-inline-item">Minimalista</li>
                                <li class="list-inline-item">Moderna</li>
                                <li class="list-inline-item">Iluminación natural</li>
                                <li class="list-inline-item">Diseño sostenible</li>
                                <li class="list-inline-item">Terraza al aire libre</li>
                            </ul>
                            <p class="description">
                                Esta impresionante casa contemporánea destaca por su diseño sofisticado que combina
                                madera, concreto y cristal.
                                Con amplias ventanas que permiten la entrada de luz natural, la propiedad ofrece un
                                ambiente luminoso y acogedor.
                                La terraza en el nivel superior brinda vistas espectaculares, mientras que el interior
                                cuenta con espacios abiertos
                                y elegantes, perfectos para la convivencia. Un verdadero refugio de estilo y confort.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="parallax3 d-flex flex-column align-items-center justify-content-center mt-3">
        <div class="text-center ">
            <p id="ESTO" class="h1 text-center">ESTO ES RECINTO</p>
            <p id="caracteristicas" class="text-center">Innovación, excelencia, liderazgo.</p>
            <button type="button" class="btn btn-custom">CONTACTANOS</button>
        </div>

        <!-- Footer dentro del parallax -->
        <footer class=" align-items-center mt-4 ms-3">
            <!-- Texto a la izquierda -->
            <div class="footer-text text-center">
                <a href="#">RECINTO ARQUITECTURA 2024</a>
                <a href="#">POLITICAS DE PRIVACIDAD</a>
                <a href="#">TERMINOS Y CONDICIONES</a>
            </div>

            <!-- Redes sociales a la derecha -->
            <div class="footer-social-icons text-center">
                <a href="#" class="fab fa-facebook">Facebook</a>
                <a href="#" class="fab fa-instagram">Instagram</a>
                <a href="#" class="fab fa-whatsapp">Whatsapp</a>
                <a href="#" class="fab fa-linkedin">LinkedIn</a>
            </div>
        </footer>
    </div>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
