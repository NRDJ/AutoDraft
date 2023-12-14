<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-contacto.css" type="text/css">
    <title>Contacto</title>
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
            <li><a href="{{ route('sobre') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}" class="active">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}">Intranet</a></li>

            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="banner-sobre-nosotros">
        <h2>Contacto</h2>
    </div>
    <div class="imagen-equipo">
        <img src="/assets/img-sobre/autodraft web2_contacto_lideres.png" alt="">
    </div>
    <div class="redes">
        <div class="listado">
            <span><img src="/assets/img-sobre/autodraft web2_icon_ubicacion.png" alt=""><p>Agua Santa 3305, Viña Del Mar, 2520000</p></span>
            <span><img src="/assets/img-sobre/autodraft web2_icon_telefono.png" alt=""><p>(+56) 3290 8872 / (+56) 9 4771 6961</p></span>
            <span><img src="/assets/img-sobre/autodraft web2_icon_correo.png" alt=""><p>ventas.autodraft@gmail.com</p></span>
        </div>
        <div class="separation">
            <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="">
        </div>
    <div class="horarios">
        <h3>HORARIO</h3>
        <p>LUN - VIE: 9:45 - 18:00 <br><br>
        SÁBADO: 10:00 - 13:00 <br><br>
    DOMINGO: Cerrado</p>
    </div>
    <div class="separation">
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="">
    </div>
    <div class="form-email">
        <h2>Envía un mensaje</h2>
        <br><br><br>
        <input type="text" placeholder="Nombre*">
        <br><br><br>
        <input type="text" placeholder="Email*">
        <br><br><br>
        <input type="text" placeholder="Mensaje*">
        <br><br><br><br><br>
        <input type="button" class="boton-form" value="Enviar">
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