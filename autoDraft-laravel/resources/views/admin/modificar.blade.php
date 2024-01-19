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
    
    @include('partials.head_navbar')
    
    <div class="logout">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit();"><img src="/assets/img-contactos/cerrar-sesion (1).png" alt=""></a>
        </form>
        <p>Cerrar sesión</p>
    </div>
    <h2>Modificar producto</h2>
    <section class="modificar">
        <form action="{{ route('update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="nombre" id="name" placeholder="Nombre del producto" value="{{ $product->nombre }}">
            <div id="nombre-error" class="text-danger">@error('nombre') {{ $message }} @enderror</div>
            <input type="number" name="valor" placeholder="Valor" value="{{ $product->valor }}">
            <div id="valor-error" class="text-danger">@error('valor') {{ $message }} @enderror</div>
            <input type="file" name="imagen"  placeholder="imagen">
            <div id="imagen-error" class="text-danger">@error('imagen') {{ $message }} @enderror</div>
            <textarea name="descripcion" id="description" cols="30" rows="10" placeholder="Ingrese descripción">{{ $product->descripcion }}</textarea>
            <div id="descripcion-error" class="text-danger">@error('descripcion') {{ $message }} @enderror</div>
            <input type="submit" value="Modifcar" class="btn-modificar">
        </form>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
            // Check if there's a success message in the session data
            @if(session('success'))
                Swal.fire({
                    title: 'Éxito',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif
    });
</html>