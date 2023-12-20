<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-cesta.css">
    <title>Cesta</title>
</head>

<body>
    @include('partials.head_navbar')

    <div class="banner-sobre-nosotros">
        <h2>Cesta</h2>
    </div>
    <section class="ubi">
        <h3>Calcular entrega</h3>
        <div class="formulario-ubi"><input type="text" class="input-ubi">
            <input type="submit" value="Calcular" class="btn-ubi">
        </div>
        <a href="#">Usar mi ubicación</a>
    </section>

    <section class="total">
        <h3>Resumen del pedido</h3>
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="">
        <div class="total-productos">
            <h3>{{$totalQuantity}} Productos</h3>
            <p>${{$totalCost}}</p>
        </div>
        <div class="total-productos">
            <h3>Total</h3>
            <p>${{$totalCost}}</p>
        </div>
    </section>
    <div class="botones">
        <div><input type="submit" value="SEGUIR COMPRANDO" class="seguir"></div>
        <div><input type="submit" value="COMPRAR MÁS PRODUCTOS" class="comprar"></div>
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
                <form action="https://formsubmit.co/felipesanchezp24@gmail.com" method="POST">
                    <p>Nombre</p>
                    <br>
                    <input type="text" name="Nombre" id="nombre">
                    <br>
                    <br>
                    <p>Email</p>
                    <br>
                    <input type="email" name="Correo electrónico" id="email">
                    <br>
                    <br>
                    <p>Motivo del correo</p>
                    <br>
                    <textarea name="Asunto del mensaje" id="mensaje" cols="30" rows="10"></textarea>
                    <br><br><br><br><br>
                    <div class="btn-envio"><input type="submit" id="enviarCorreo"></div>

                    <input type="hidden" name="_next" value="http://127.0.0.1:5500/">
                    <input type="hidden" name="_captcha" value="false">
                </form>
            </span>
        </div>
        <div class="linea-final"></div>
    </section>
</body>

</html>