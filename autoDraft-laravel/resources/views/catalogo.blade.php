<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-catalogo.css" type="text/css">
    <script src="https://unpkg.com/@botpoison/browser" async></script>
    <title>Catálogo</title>
</head>

<body>
    
    @include('partials.head_navbar')

    <div class="banner-sobre-nosotros">
        <h2>Catálogo</h2>
    </div>
    <section id="seccion-catalogo">
    @foreach($products as $product)
        <div class="caja-uno">
            <div class="left-side"><img src="{{ asset('storage/images/' . $product->imagen) }}" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>{{ $product->nombre }}</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>{{ $product->descripcion }}</p>
               <div class="precio"><p>${{ number_format($product->valor, 0, '', '.') }}</p></div>
            </div>
        </div>
        <div class="btn-aniadir">
        <a href="#" class="add-to-cart" data-id="{{ $product->id }}">                
            <input type="submit" value="Añadir">
        </a>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
    @endforeach
    </section>

    @include('partials.contact_section')
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.add-to-cart').on('click', function(e) {
                e.preventDefault();

                var productId = $(this).data('id');

                $.ajax({
                    url: '/add-to-cesta/' + productId,
                    type: 'GET',
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: response.message,
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
