<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-sobre.css" type="text/css">
    <script src="https://unpkg.com/@botpoison/browser" async></script>
    <title>Sobre nosotros</title>
</head>

<body>
    
    @include('partials.head_navbar')
    
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
    @include('partials.contact_section')
</body>

</html>