<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-contacto.css" type="text/css">
    <script src="https://unpkg.com/@botpoison/browser" async></script>
    <title>Contacto</title>
</head>

<body>
    
    @include('partials.head_navbar')
    
    <div class="banner-sobre-nosotros">
        <h2>Contacto</h2>
    </div>
    <div class="imagen-equipo">
        <img src="/assets/img-sobre/autodraft web2_contacto_lideres.png" alt="">
    </div>
    <div class="redes">
        <div class="listado">
            <span><img src="/assets/img-sobre/autodraft web2_icon_ubicacion.png" alt=""><p>1 Norte 1055 esquina 3 1/2 Oriente, Viña del Mar</p></span>
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
        <form id="form2" action="https://submit-form.com/GHPAfeaRw" m method="POST">
            <h2>Envía un mensaje</h2>
            <br><br><br>
            <input type="text" name="Nombre" id="nombre" placeholder="Nombre*">
            <br><br><br>
            <input type="email" name="Email" id="email" placeholder="Email*">
            <br><br><br>
            <textarea name="Mensaje" id="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje*"></textarea>
            <br><br><br><br><br>
            <input type="submit" class="boton-form" id="button2" value="Enviar">
            <input type="hidden" name="_next" value="https://www.autodraft.cl>
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>
    <script>
        $(document).ready(function() {

            var formElement = document.getElementById("form2");
            var buttonElement = document.getElementById("button2");
            formElement.addEventListener("botpoison-challenge-start", function () {
                buttonElement.setAttribute("disabled", "disabled");
            });
            formElement.addEventListener("botpoison-challenge-success", function () {
                buttonElement.removeAttribute("disabled");
            });
            formElement.addEventListener("botpoison-challenge-error", function () {
                buttonElement.removeAttribute("disabled");
            });
        });
     </script>
    @include('partials.contact_section')

</body>

</html>