<!DOCTYPE html>
<html lang="en">

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
    <section class="productos-carro">
        <h3>Mi carrito</h3>
        <div id="product-list">
        @if(is_array(session('cart')) && count(session('cart')) > 0)
            @foreach(session('cart') as $id => $details)
            <div class="caja product" id="product-{{$id}}">
                <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="" class="linea">
                <div class="producto">
                    <img src="{{ asset('uploads/' . $details['imagen']) }}" alt="">
                    <div class="descripcion">
                        <h4>Descripción</h4>
                        <p>{{ $details['descripcion'] }}</p>
                    </div>
                </div>
                <div class="btn-interaccion">
                    <p class="parr">Vendido y entregado por <b>AutoDraft</b></p>
                    <div class="inter">
                        <a href="#">Guardar para mas adelante</a>
                        <p>|</p> 
                        <a href="#" class="remove-from-cart" data-id="{{ $id }}">Eliminar</a>
                    </div>
                </div>
                <form action="{{ route('ubicacion') }}" method="post">
                    @csrf
                    <div class="final-caja">
                        <select name="products[{{ $id }}][quantity]" id="cant">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                        </select>
                        <div class="valor">${{ $details['valor'] }}</div>
                        <input type="hidden" name="products[{{ $id }}][price]" value="{{ $details['valor'] }}">
                    </div>
            </div>
            @endforeach
        @endif
<!-- --------------------------------------------botón envio--------------------------------------------- -->
            <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="" class="linea">
                <section class="btn-enviar-prods">
                    <input type="submit" value="Aceptar">
                </section>
            </form>
        </div>
        
<!-- -----------------------------------Seccion carro vacio---------------------------------------------- -->
        <section class="carro-vacio" id="carro-vacio">
            <img src="/assets/img/img-carro/autodraft web_img_cesta.png" alt="">
            <p>Aún no tienes artículos en tu carrito.</p>
            <form action="{{ route('catalogo') }}" method="get">
                <input type="submit" value="VER PRODUCTOS">
            </form>
        </section>
    </section>

    @include('partials.contact_section')
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Function to check if there are any products in the cart
    function checkCart() {
        console.log($('.product').length);
        if ($('.product').length > 0) {
            // If there are products, show the "product-list" section and hide the "carro-vacio" section
            $('#product-list').show();
            $('#carro-vacio').hide();
        } else {
            console.log('no hay productos');
            // If there are no products, hide the "product-list" section and show the "carro-vacio" section
            $('#product-list').hide();
            $('#carro-vacio').show();
        }
    }

    $(document).ready(function() {
        // Check the cart when the page loads
        checkCart();

        // Other code...

        $('.remove-from-cart').on('click', function(e) {
            e.preventDefault();

            var productId = $(this).data('id');

            $.ajax({
                url: '/remove-from-cesta/' + productId,
                type: 'GET',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: response.message,
                    }).then((result) => {
                        // Remove the product from the page
                        $('#product-' + productId).remove();

                        // Check the cart
                        checkCart();
                    });
                },
                error: function(response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.responseJSON.message,
                    });
                }
            });
        });
    });
</script>

</html>