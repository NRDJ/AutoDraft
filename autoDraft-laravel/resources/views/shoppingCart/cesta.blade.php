<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles-cesta.css">
    <title>Cesta</title>
</head>

<body>
    
    @include('partials.head_navbar')

    <div class="banner-sobre-nosotros">
        <h2>Cesta</h2>
    </div>
    <section class="productos-carro">
        <h3>Mi carrito</h3>
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="" class="linea">
        <div class="caja">
            <div class="producto">
                <img src="/assets/img/img-catalogo/aaaaa.jpg" alt="">
                <div class="descripcion">
                    <h4>Descripción</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto optio, quibusdam expedita facilis
                        ad ipsum tempore molestias fugiat provident. Unde velit cumque dignissimos earum assumenda
                        similique consequatur rem, accusamus facilis!</p>
                </div>
            </div>
            <div class="btn-interaccion">
                <p class="parr">Vendido y entregado por <b>AutoDraft</b></p>
                <div class="inter">
                    <a href="#">Guardar para mas adelante</a>
                    <p>|</p> <a href="#">Eliminar</a>
                </div>
            </div>
            <div class="final-caja">
                <select name="Cantidad" id="cant">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <div class="precio">$000.000</div>
            </div>
        </div>
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="" class="linea">
    </section>
    <!-- --------------------------------------------botón envio--------------------------------------------- -->
    <section class="btn-enviar-prods">

        <form action="/pages/ubicacion.html">
            <input type="submit" value="Aceptar">
        </form>
    </section>
    <!-- -----------------------------------Seccion carro vacio---------------------------------------------- -->
    <section class="carro-vacio">
        <img src="/assets/img/img-carro/autodraft web_img_cesta.png" alt="">
        <p>Aún no tienes artículos en tu carrito.</p>
        <input type="submit" value="VER PRODUCTOS">
    </section>



    @include('partials.contact_section')
</body>

</html>