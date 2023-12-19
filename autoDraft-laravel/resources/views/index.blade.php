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
    
    @include('partials.head_navbar')

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
    <!-- Loads contact section in contact_section.blade.php -->
    @include('partials.contact_section')

</body>

</html>