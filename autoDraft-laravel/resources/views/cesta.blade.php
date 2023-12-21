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

    <div class="redes-sociales">
            <a href="#"><img src="assets/img/fb.png" alt=""></a>
            <a href="#"><img src="assets/img/ig.png" alt=""></a>
    </div>
    <div class="head-list">
        <!-- Adds the class 'active' to the <a> element to mark it as selected depending on the route -->
        <ul>
            <li class="imagen-hidden-uno"><a href="#"><img src="assets/img/logo.png" alt=""></a></li>
            <li class="imagen-hidden"><a href="#"><img src="assets/img/blanco.png" alt=""></a></li>
            <li><a href="{{ route('index') }}" class="{{ Request::is('index') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('catalogo') }}" class="{{ Request::is('catalogo') ? 'active' : '' }}">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}" class="{{ Request::is('laminas') ? 'active' : '' }}">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}" class="{{ Request::is('sobre') ? 'active' : '' }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}" class="{{ Request::is('contacto') ? 'active' : '' }}">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Intranet</a></li>
            <li><a href="{{ route('cesta') }}" class="{{ Request::is('cesta') ? 'active' : '' }}">Cesta</a></li>
        </ul>
    </div>

    <div class="banner-sobre-nosotros">
        <h2>Cesta</h2>
    </div>
    <section class="productos-carro">
        <h3>Mi carrito</h3>
        <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="" class="linea">
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
        <div class="caja">
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
                    <p>|</p> <a href="{{ route('remove.from.cesta', $id) }}">Eliminar</a>
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
            <img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt="" class="linea">
            @endforeach
<!-- --------------------------------------------botón envio--------------------------------------------- -->
                <section class="btn-enviar-prods">
                    <input type="submit" value="Aceptar">
                </section>
            </form>
<!-- -----------------------------------Seccion carro vacio---------------------------------------------- -->
            @else
            <section class="carro-vacio">
                <img src="/assets/img/img-carro/autodraft web_img_cesta.png" alt="">
                <p>Aún no tienes artículos en tu carrito.</p>
                <form action="{{ route('catalogo') }}" method="get">
                    <input type="submit" value="VER PRODUCTOS">
                </form>
            </section>
            @endif
        </section>

        @include('partials.contact_section')
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
            var message = "{{ Session::get('success') }}";

            if(message) {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: message,
                })
            }
    </script>

</html>