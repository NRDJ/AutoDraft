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
        <!-- <h3>Calcular entrega</h3>
        <div class="formulario-ubi"><input type="text" class="input-ubi">
            <input type="submit" value="Calcular" class="btn-ubi">
        </div>
        <a href="#">Usar mi ubicación</a> -->
        <h3>Los costos de envío variarán según la zona de entrega. Dichos costos se determinarán en común acuerdo
            directamente con la sucursal.</h3>
            <img src="/assets/img-contactos/caja.png" alt="">
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
        <div>
            <a target="_blank" href="https://micrositios.getnet.cl/autodraft">
                <input type="submit" value="SEGUIR COMPRANDO" class="seguir"></div>
            </a>
        <div>
            <a href="{{ route('catalogo') }}">
                <input type="submit" value="COMPRAR MÁS PRODUCTOS" class="comprar">
            </a>

        </div>
    </div>

    @include('partials.contact_section')

</body>

<script>
    document.getElementById('use-my-location').addEventListener('click', function(e) {
        e.preventDefault();

        if (!navigator.geolocation) {
            alert('Geolocation is not supported by your browser');
        } else {
            navigator.geolocation.getCurrentPosition(success, error);
        }
    });

    function success(position) {
        var latitude  = position.coords.latitude;
        var longitude = position.coords.longitude;

        // You can use the latitude and longitude values here
        alert('Latitude is ' + latitude + '°, Longitude is ' + longitude + '°');
    }

    function error() {
        alert('Unable to retrieve your location');
    }
</script>

</html>