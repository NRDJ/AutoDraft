<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles-modificar.css" type="text/css">
    <link rel="stylesheet" href="/styles/styles-logout.css" type="text/css">

    <title>Modificar</title>
</head>
<body>
    <div class="redes-sociales">
        <a href="#"><img src="/assets/img/fb.png" alt=""></a>
        <a href="#"><img src="/assets/img/ig.png" alt=""></a>
    </div>
    <div class="head-list">
        <ul>
            <li class="imagen-hidden-uno"><a href="#"><img src="/assets/img/logo.png" alt=""></a></li>
            <li class="imagen-hidden"><a href="#"><img src="/assets/img/blanco.png" alt=""></a></li>
            <li><a href="{{ route('index') }}">Inicio</a></li>
            <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}" class="active">Intranet</a></li>
            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="logout">
        <a href=""><img src="/assets/img-contactos/cerrar-sesion (1).png" alt="" ></a>
        <p>Cerrar sesión</p>
      </div>
    <h2>Modificar producto</h2>
    <section class="modificar">
        <form action="{{ route('update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="nombre" id="name" placeholder="Nombre del producto" value="{{ $product->name }}">
            <input type="number" name="valor" placeholder="Valor" value="{{ $product->value }}">
            <input type="file" name="imagen"  placeholder="imagen">
            <textarea name="descripcion" id="description" cols="30" rows="10" placeholder="Ingrese descripción">{{ $product->description }}</textarea>
            <input type="submit" value="Modifcar" class="btn-modificar">
        </form>
    </section>
</body>
</html>