<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-dos.png">
    <link rel="stylesheet" href="/styles/styles-catalogo.css" type="text/css">
    <title>Catálogo</title>
</head>

<body>
    
    @include('partials.head_navbar')

    <div class="banner-sobre-nosotros">
        <h2>Catálogo</h2>
    </div>

    <!-- <section id="seccion-catalogo">
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/puerta.jpg" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 1</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <div class="precio"><p>$000.000</p></div>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/aaaaa.jpg" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 2</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <span class="precio"><p>$000.000</p></span>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/images.jfif" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 3</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <span class="precio"><p>$000.000</p></span>
            </div>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
        <div class="caja-uno">
            <div class="left-side"><img src="/assets/img/img-catalogo/foto.jpg" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>PRODUCTO 4</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati optio iste doloribus eum
                    officiis illo modi officia eaque labore.</p>
                <span class="precio"><p>$000.000</p></span>
            </div>
        </div>
    </section> -->

    <section id="seccion-catalogo">
    @foreach($products as $product)
        <div class="caja-uno">
            <div class="left-side"><img src="{{ asset('uploads/' . $product->imagen) }}" alt=""></div>
            <div class="right-side">
                <span class="titulo">
                    <h2>{{ $product->nombre }}</h2>
                </span>
                <h3>DESCRIPCIÓN</h3>
                <p>{{ $product->descripcion }}</p>
                <div class="precio"><p>${{ $product->valor }}</p></div>
            </div>
        </div>
        <div class="btn-aniadir">
            <form action="{{ route('index') }}" method="get" enctype="multipart/form-data">
                <input type="submit" value="Añadir">
            </form>
        </div>
        <div class="separation"><img src="/assets/img-sobre/autodraft web2_linea separatoria.png" alt=""></div>
    @endforeach
    </section>

    @include('partials.contact_section')
</body>

</html>