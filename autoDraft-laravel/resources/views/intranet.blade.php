<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles-intranet.css" type="text/css">
    <title>Intranet</title>
</head>

<body>
    
    @include('partials.head_navbar')

    <div class="banner-sobre-nosotros">
        <h2>Intranet</h2>
    </div>
    <section class="seccion-uno">
        <div class="formulario">
            <form action="/pages/crud.html">
                <label for="">Inicio de sesión</label>
                <input type="text" placeholder="Nombre">
                <input type="password" placeholder="Contraseña">
           
                <input class="ingreso" type="submit" value="Ingresar">
        </div>
        <div></div>
        </form>
        <div class="frase">
            <p>En Autodraft nos comprometemos a brindarle un servicio excepcional que supere sus expectativas en cada
                interacción. Nuestro enfoque se centra en la calidad, la transparencia y la satisfacción del cliente.
                Desde el momento en que elige nuestros servicios, puede confiar en que trabajaremos incansablemente para
                entender y satisfacer sus necesidades. Nos esforzamos por ofrecer soluciones eficientes, oportunistas y
                personalizadas que reflejen nuestro compromiso con la excelencia.</p>
        </div>
    </section>
</body>

</html>
