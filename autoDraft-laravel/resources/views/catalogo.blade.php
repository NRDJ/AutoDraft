<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-catalogo.css" type="text/css">
    <title>Catálogo</title>
</head>

<body>
    <div class="redes-sociales">
        <a href="#"><img src="/assets/img/fb.png" alt=""></a>
        <a href="#"><img src="/assets/img/ig.png" alt=""></a>
    </div>
    <div class="head-list">
        <ul>
            <li class="imagen-hidden-uno"><a href="#"><img src="/assets/img/logo.png" alt=""></a></li>
            <li class="imagen-hidden"><a href="#"><img src="/assets/img/blanco.png" alt=""></a></li>
            <li><a href="{{ route('index') }}">Inicio</a></li>
            <li><a href="{{ route('catalogo') }}" class="active">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}">Intranet</a></li>
            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="banner-sobre-nosotros">
        <h2>Catálogo</h2>
    </div>

    <!-- <section id="seccion-catalogo">
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/puerta.jpg" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 1</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <div class="precio"><p>$000.000</p></div>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/aaaaa.jpg" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 2</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <span class="precio"><p>$000.000</p></span>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/images.jfif" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 3</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <span class="precio"><p>$000.000</p></span>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/foto.jpg" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 4</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <span class="precio"><p>$000.000</p></span>
            </div>
        </div>
    </section> -->

    <section id="seccion-catalogo">
    @foreach($products as $product)
        <div class="caja-uno">
            <div class="left-side"><img src="{{ asset('uploads/' . $product->imagen) }}" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>{{ $product->nombre }}</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>{{ $product->descripcion }}</p>
                <div class="precio"><p>${{ $product->valor }}</p></div>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
    @endforeach
    </section>














    <section id="seccion-tres">
        <div class="pagos"><img src="/assets/img/pagos.png" alt=""></div>
        <div class="contacto">
            <span class="contacto-descripcion">
                <p>Líderes en seguridad Automotriz<br><br>
                    DIRECCIÓN: Agua santa 3305, Viña Del Mar, 2520000.<br>
                    TELÉFONO: (+56) 3290 8872 / (+56) 9 4771 6961<br>
                    EMAIL: ventas.autodraft@gmail.com<br><br><br><br>
                    LUN - VIE: 9:45 - 18:00<br>
                    SÁBADO: 10:00 - 13:00<br>
                    DOMINGO: CERRADO
                </p>
                <div class="contacto-imagen"><img src="/assets/img/logo-dos.png" alt=""></div>
            </span>
            <span class="formulario">
                <p>Nombre</p>
                <br>
                <input type="text">
                <br>
                <br>
                <p>Email</p>
                <br>
                <input type="text">
                <br>
                <br>
                <p>Dirección</p>
                <br>
                <input type="text">
                <br><br>
                <div class="btn-envio"><input type="submit"></div>
            </span>
        </div>
        <div class="linea-final"></div>
    </section>
</body>

</html>