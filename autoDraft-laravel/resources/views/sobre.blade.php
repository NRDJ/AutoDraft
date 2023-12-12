<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-sobre.css" type="text/css">
    <title>Sobre nosotros</title>
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
            <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}" class="active">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li><a href="#">Intranet</a></li>
            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="banner-sobre-nosotros">
        <h2>Sobre nosotros</h2>
    </div>
    <div class="texto-sobre-nosotros">
        <p>Autodraft hoy es una empresa líder en equipamiento de <br>
            seguridad automotriz, especialistas y únicos con mas de 7 <br>
            distintos grosores y niveles de protección en láminas de <br>
            seguridad, además de contar con un amplio abanico de <br>
            opciones en accesorios eléctricos automotrices previniendo <br>
            el robo de tu vehículo</p>
    </div>
    <div class="imagen-principal-sobre">
        <img src="/assets/img-sobre/sobre.png" alt="">
    </div>
    <div class="banner-sobre-nosotros-dos">
        <h2>SIEMPRE ESTAMOS FELICES <br>
            DE RECOMENDAR LA MEJOR SOLUCIÓN</h2>
    </div>
    <div class="separacion">
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="">
    </div>
    <div class="cuerpo">
        <div class="left">
            <h3>VISIÓN</h3>
            <br>
            <p>Nuestra visión es poder <br>
                abarcar gran parte del <br>
                segmento vehicular, dando <br>
                soluciones íntegras y <br>
                eficientes para nuestros <br>
                clientes de protección en <br>
                láminas de seguridad, <br>
                además de contar con un <br>
                amplio abanico de opciones <br>
                en accesorios eléctricos <br>
                automotrices previniendo el <br>
                robo de tu vehículo.</p>
            <img src="/assets/img-sobre/img.png" alt="">
        </div>
        <div class="right">
            <h3>SELLOS DIFERENCIADORES</h3>
            <br>
            <p>
            <b>1-</b>Somos la única empresa <br>
            a nivel regional y dentro de <br>
            las 2 nacionales en instalar <br>
            láminas de seguridad hasta <br>
            48 micras.<br><br></p>
            <p>
            <b>2-</b>Empresa reconocida y de <br>
            prestigio debido a nuestros<br>
            grandes partners estratégicos <br>
            como Fronza, Rosselot, A&R <br>
            automotriz, Aspillaga y <br>
            Hornauer, de protección en  <br>
            láminas de seguridad, además <br>
            de contar con un amplio <br>
            abanico de opciones en <br>
            accesorios eléctricos <br>
            automotrices previniendo el <br>
            robo de tu vehículo</p>
        </div>
    </div>
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