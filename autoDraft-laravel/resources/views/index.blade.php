<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <title>AutoDraft</title>
</head>
<body>
    <div class="redes-sociales">
        <a href="#"><img src="assets/img/fb.png" alt=""></a>
        <a href="#"><img src="assets/img/ig.png" alt=""></a>
    </div>
    <div class="head-list">
        <ul>
            <li class="imagen-hidden-uno"><a href="#"><img src="assets/img/logo.png" alt=""></a></li>
            <li class="imagen-hidden"><a href="#"><img src="assets/img/blanco.png" alt=""></a></li>
            <li><a href="{{ route('index') }}" class="active">Inicio</a></li>
            <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}">Intranet</a></li>
            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="linea-separacion"></div>
    <section id="seccion-uno">
        <div class="vista-principal"><img src="assets/img/principal.png" alt=""></div>
        <div class="titulo-separador">
            <h2>PRODUCTOS Y SERVICIOS DESTACADOS</h2>
        </div>
    </section>
    <section id="seccion-dos">
        <div class="servicios">
            <img src="assets/img/laminas.png" alt="">
            <img src="assets/img/equipo.png" alt="">
            <img src="assets/img/accesorios.png" alt="">
            <img src="assets/img/equipamiento.png" alt="">
        </div>
        <div class="marcas">
            <img src="assets/img/fronza.png" alt="">
            <img src="assets/img/roselot.png" alt="">
            <img src="assets/img/kaufmann.png" alt="">
            <img src="assets/img/aspillaga.png" alt="">
            <img src="assets/img/ar.png" alt="">
        </div>
    </section>
    <section id="seccion-tres">
        <div class="banner"><img src="assets/img/banner.png" alt=""></div>
        <div class="pagos"><img src="assets/img/pagos.png" alt=""></div>
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
                <div class="contacto-imagen"><img src="assets/img/logo-dos.png" alt=""></div>
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
                <br><br><br><br><br>
                <div class="btn-envio"><input type="submit"></div>
            </span>
        </div>
        <div class="linea-final"></div>
    </section>
</body>

</html>